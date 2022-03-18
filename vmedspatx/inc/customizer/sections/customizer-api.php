<?php

Kirki::add_field( 'vmedspatx', [
	'type'     => 'text',
	'settings' => 'affiliate_id',
	'label'    => __( 'Affiliate ID', 'vmedspatx' ),
	'placeholder' => esc_html__( 'Enter the affiliate for deeplink', 'vmedspatx' ),
	'section'  => 'section_api',
	'default'  => '',
	'priority' => 10,
] );

Kirki::add_field( 'vmedspatx', [
    'type'     => 'text',
    'settings' => 'app_id',
    'label'    => __( 'APP ID', 'vmedspatx' ),
    'section'  => 'section_api',
    'default'  => 'd83c15c4',
    'priority' => 10,
] );

Kirki::add_field( 'vmedspatx', [
    'type'     => 'text',
    'settings' => 'app_key',
    'label'    => __( 'APP ID', 'vmedspatx' ),
    'section'  => 'section_api',
    'default'  => '582e33e3e95b0644e18f8429e7f6dc19',
    'priority' => 15,
] );

Kirki::add_field( 'vmedspatx', [
    'type'     => 'url',
    'settings' => 'api_url',
    'label'    => __( 'API URL', 'vmedspatx' ),
    'section'  => 'section_api',
    'default'  => 'https://api.unicdn.net/v1/feeds/sportsbookv2',
    'priority' => 20,
] );

$languages = [
    "pt_BR" => "Portugese Brazil",
    "pl_PL" => "Polish",
    "lt_LT" => "Lithuanian",
    "bg_BG" => "Bulgarian",
    "ru_RU" => "Russian",
    "ro_RO" => "Romanian",
    "el_GR" => "Greek",
    "pt_PT" => "Portugese",
    "en_GB" => "English (United Kingdom)",
    "fr_CH" => "French Swiss",
    "cs_CZ" => "Czech",
    "es_ES" => "Spanish",
    "nl_BE" => "Flemish",
    "en_AU" => "English in Australia",
    "de_AT" => "Austrian",
    "lv_LV" => "Latvian",
    "hr_HR" => "Croatian",
    "fi_FI" => "Finnish",
    "de_DE" => "German",
    "it_IT" => "Italian",
    "hu_HU" => "Hungarian",
    "fr_FR" => "French",
    "de_CH" => "Swiss German",
    "da_DK" => "Danish",
    "tr_TR" => "Turkish",
    "sv_SE" => "Swedish",
    "et_EE" => "Estonian",
    "no_NO" => "Norweigan",
    "nl_NL" => "Dutch",
    "fr_BE" => "Belgium French"
];

Kirki::add_field( 'vmedspatx', [
    'type'        => 'select',
    'settings'    => 'api_language',
    'label'       => esc_html__( 'API Language', 'vmedspatx' ),
    'section'     => 'section_api',
    'default'     => '',
    'placeholder' => esc_html__( 'Select a language for API', 'vmedspatx' ),
    'priority'    => 25,
    'multiple'    => 1,
    'choices'     => $languages
] );

$sites = [
    "de.vmedspatx.com" => "de.vmedspatx.com",
    "www.vmedspatx.com.au" => "www.vmedspatx.com.au",
    "www.vmedspatx.de" => "www.vmedspatx.de",
    "es.vmedspatx.com" => "es.vmedspatx.com",
    "fi.vmedspatx.com" => "fi.vmedspatx.com",
    "fr.vmedspatx.be" => "fr.vmedspatx.be",
    "nl.vmedspatx.be" => "nl.vmedspatx.be",
    "fr.vmedspatx.com" => "fr.vmedspatx.com",
    "gr.vmedspatx-3.com" => "gr.vmedspatx-3.com",
    "hu1.vmedspatx.com" => "hu1.vmedspatx.com",
    "lt.vmedspatx-74.com" => "lt.vmedspatx-74.com",
    "www.vmedspatx.eu" => "www.vmedspatx.eu",
    "no.vmedspatx.com" => "no.vmedspatx.com",
    "pl.vmedspatx-39.com" => "pl.vmedspatx-39.com",
    "pt.vmedspatx.com" => "pt.vmedspatx.com",
    "www.vmedspatx.ro" => "www.vmedspatx.ro",
    "ru24.vmedspatx.com" => "ru24.vmedspatx.com",
    "www.vmedspatx.se" => "www.vmedspatx.se",
    "www.vmedspatx.be" => "www.vmedspatx.be",
    "www.vmedspatx.com" => "www.vmedspatx.com",
    "www.vmedspatx.net" => "www.vmedspatx.net",
    "www.vmedspatx.co.uk" => "www.vmedspatx.co.uk",
    "www.vmedspatx.ie" => "www.vmedspatx.ie",
    "www.vmedspatx.dk" => "www.vmedspatx.dk",
    "www.vmedspatx.ee" => "www.vmedspatx.ee",
    "www.vmedspatx.it" => "www.vmedspatx.it",
    "ca.vmedspatx.com" => "ca.vmedspatx.com",
    "nj.vmedspatx.com" => "nj.vmedspatx.com",
    "pa.vmedspatx.com" => "pa.vmedspatx.com",
];

Kirki::add_field( 'vmedspatx', [
    'type'        => 'select',
    'settings'    => 'api_site',
    'label'       => esc_html__( 'API Site', 'vmedspatx' ),
    'section'     => 'section_api',
    'default'     => '',
    'placeholder' => esc_html__( 'Select the event source', 'vmedspatx' ),
    'priority'    => 30,
    'multiple'    => 1,
    'choices'     => $sites
] );