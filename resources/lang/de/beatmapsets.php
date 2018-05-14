<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
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

return [
    'availability' => [
        'disabled' => 'Diese Beatmap steht momentan nicht zum Download zur Verfügung.',
        'parts-removed' => 'Teile dieser Beatmap wurden auf Anfrage eines Rechteinhabers entfernt.',
        'more-info' => 'Siehe hier für mehr Informationen.',
    ],

    'index' => [
        'title' => 'Beatmaps: Liste',
        'guest_title' => '',
    ],

    'show' => [
        'discussion' => 'Diskussion',

        'details' => [
            'made-by' => 'erstellt von ',
            'submitted' => 'eingereicht an ',
            'updated' => 'letztes update an ',
            'ranked' => '<ranked> an ',
            'approved' => '<approved> an ',
            'qualified' => 'qualifziert an ',
            'loved' => '<loved> on ',
            'logged-out' => 'Zum Herunterladen von Beatmaps muss man eingeloggt sein!',
            'download' => [
                '_' => '',
                'video' => 'mit Video',
                'no-video' => 'ohne Video',
                'direct' => '',
            ],
            'favourite' => 'Dieses Beatmapset zu deinen Favoriten hinzufügen',
            'unfavourite' => 'Dieses Beatmapset von deinen Favoriten entfernen',
            'favourited_count' => '',
        ],
        'stats' => [
            'cs' => '',
            'cs-mania' => 'Tastenanzahl',
            'drain' => '',
            'accuracy' => 'Genauigkeit',
            'ar' => '',
            'stars' => '',
            'total_length' => 'Länge',
            'bpm' => '',
            'count_circles' => 'Circle-Anzahl',
            'count_sliders' => 'Slider-Anzahl',
            'user-rating' => 'Benutzerbewertungen',
            'rating-spread' => 'Bewertungsverteilung',
            'nominations' => 'Nominierungen',
            'playcount' => '',
        ],
        'info' => [
            'description' => 'Beschreibung',
            'genre' => '',
            'language' => 'Sprache',
            'no_scores' => 'Die Daten werden noch verarbeitet...',
            'points-of-failure' => 'Stellen, an denen Spieler gescheitert sind',
            'source' => 'Quelle',
            'success-rate' => 'Erfolgsrate',
            'tags' => '',
            'unranked' => '',
        ],
        'scoreboard' => [
            'achieved' => 'erreicht am :when',
            'country' => 'Länder-Rangliste',
            'friend' => 'Freundes-Rangliste',
            'global' => 'Globale Rangliste',
            'supporter-link' => '<a href=":link">Hier</a> klicken, um alle tollen Features zu entdecken!',
            'supporter-only' => 'Du musst Supporter sein, um Freundes- und Länderranglisten zu sehen!',
            'title' => 'Ranglisten',

            'headers' => [
                'accuracy' => 'Genauigkeit',
                'combo' => 'Combo',
                'miss' => '',
                'mods' => '',
                'player' => 'Spieler',
                'pp' => 'PP',
                'rank' => 'Rang',
                'score_total' => 'Gesamtpunktzahl',
                'score' => 'Punktzahl',
            ],

            'no_scores' => [
                'country' => 'Niemand in deinem Land hat einen Rang auf dieser Beatmap!',
                'friend' => 'Keiner deiner Freunde hat einen Rang auf dieser Beatmap!',
                'global' => 'Noch niemand auf der Rangliste. Wie wärs?',
                'loading' => 'Lade Ränge...',
                'unranked' => 'Nicht <ranked> Beatmap.',
            ],
            'score' => [
                'first' => 'An der Spitze',
                'own' => 'Dein bester Rang',
            ],
        ],
    ],
];
