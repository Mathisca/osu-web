<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Tests;

use App\Libraries\Fulfillments\BannerFulfillment;
use App\Libraries\Fulfillments\FulfillmentFactory;
use App\Models\Country;
use App\Models\ProfileBanner;
use App\Models\Store\Order;
use App\Models\Store\OrderItem;
use App\Models\Store\Product;
use App\Models\Tournament;
use App\Models\User;
use Carbon\Carbon;
use TestCase;

class BannerFulfillmentTest extends TestCase
{
    protected $connectionsToTransact = [
        'mysql',
        'mysql-store',
    ];

    public function setup()
    {
        parent::setup();

        $this->user = factory(User::class)->create([
            'osu_featurevotes' => 0,
            'osu_subscriptionexpiry' => Carbon::now(),
        ]);

        $this->order = factory(Order::class)->create([
            'user_id' => $this->user->user_id,
            'transaction_id' => 'test-'.time(),
        ]);

        // crap test
        $this->tournament = factory(Tournament::class)->create();
        $this->product = Product::customClass('mwc7-supporter')->orderBy('product_id', 'desc')->first();
        $matches = [];
        preg_match('/.+\((?<country>.+)\)$/', $this->product->name, $matches);
        $this->country = Country::where('name', $matches['country'])->first();
    }

    public function testAddBanner()
    {
        $orderItem = $this->createOrderItem($this->product);
        // BannerFulfillment is abstract
        $subjects = FulfillmentFactory::createFulfillersFor($this->order);
        $beforeCount = ProfileBanner::where('user_id', $this->user->user_id)
            ->where('tournament_id', $this->tournament->tournament_id)
            ->where('country_acronym', $this->country->acronym)
            ->count();

        foreach ($subjects as $subject) {
            $subject->run();
        }

        $afterCount = ProfileBanner::where('user_id', $this->user->user_id)
            ->where('tournament_id', $this->tournament->tournament_id)
            ->where('country_acronym', $this->country->acronym)
            ->count();

        $this->assertSame($beforeCount + 1, $afterCount);
    }

    private function createOrderItem($product)
    {
        return factory(OrderItem::class)->create([
            'product_id' => $product->product_id,
            'order_id' => $this->order->order_id,
            'cost' => $product->cost,
            'extra_data' => [
                'tournament_id' => $this->tournament->tournament_id,
                'cc' => $this->country->acronym,
            ],
        ]);
    }
}
