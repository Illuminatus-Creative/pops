<?php
/**
 * Per-page structured data (JSON-LD).
 *
 * Yoast SEO emits the base Organization / WebSite / WebPage graph. This file
 * adds the location-specific schema the brand reference (§10) calls for, and
 * replaces the hardcoded global JSON-LD that was removed from header.php in v2:
 *
 *   - Austin catering page (catering.php)            -> LocalBusiness, Wells
 *                                                       Branch HQ address + hours.
 *   - Dallas catering page (dallas-paleta-catering)  -> Service + areaServed
 *                                                       (DFW). No PostalAddress:
 *                                                       Dallas is a staffed
 *                                                       service area, not a
 *                                                       storefront (decision D4).
 *
 * @package themomandpops
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output the per-page JSON-LD in the document head.
 */
function themomandpops_v2_structured_data() {

	if ( ! is_page() ) {
		return;
	}

	$schema = null;

	if ( is_page_template( 'page-templates/catering.php' ) ) {
		$schema = themomandpops_v2_austin_localbusiness();
	} elseif ( is_page_template( 'page-templates/dallas-paleta-catering.php' ) ) {
		$schema = themomandpops_v2_dallas_service();
	}

	if ( empty( $schema ) ) {
		return;
	}

	echo "\n" . '<script type="application/ld+json">' . "\n";
	echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
	echo "\n" . '</script>' . "\n";
}
add_action( 'wp_head', 'themomandpops_v2_structured_data', 20 );

/**
 * Austin catering = LocalBusiness with the Wells Branch HQ.
 *
 * @return array
 */
function themomandpops_v2_austin_localbusiness() {
	return array(
		'@context'                  => 'https://schema.org',
		'@type'                     => 'LocalBusiness',
		'@id'                       => home_url( '/#austin-hq' ),
		'name'                      => 'Mom & Pops All Natural Frozen Pops',
		'url'                       => get_permalink(),
		'image'                     => get_template_directory_uri() . '/images/mompopslogo.webp',
		'telephone'                 => '+1-512-775-1353',
		'email'                     => 'info@lovemomandpops.com',
		'priceRange'                => '$$',
		'address'                   => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => '2013 Wells Branch Parkway, Suite 304',
			'addressLocality' => 'Austin',
			'addressRegion'   => 'TX',
			'postalCode'      => '78728',
			'addressCountry'  => 'US',
		),
		'geo'                       => array(
			'@type'     => 'GeoCoordinates',
			'latitude'  => '30.4380',
			'longitude' => '-97.6940',
		),
		'openingHoursSpecification' => array(
			array(
				'@type'     => 'OpeningHoursSpecification',
				'dayOfWeek' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ),
				'opens'     => '10:00',
				'closes'    => '16:00',
			),
		),
		'areaServed'                => array(
			array(
				'@type' => 'City',
				'name'  => 'Austin',
			),
			array(
				'@type' => 'City',
				'name'  => 'Round Rock',
			),
			array(
				'@type' => 'City',
				'name'  => 'Pflugerville',
			),
		),
		'sameAs'                    => array(
			'https://www.facebook.com/MomAndPopsAllNatural/',
			'https://www.instagram.com/lovemomandpops/',
		),
	);
}

/**
 * Dallas catering = Service + areaServed (DFW), no street address (D4).
 *
 * @return array
 */
function themomandpops_v2_dallas_service() {
	return array(
		'@context'    => 'https://schema.org',
		'@type'       => 'Service',
		'@id'         => get_permalink() . '#dallas-catering',
		'serviceType' => 'Paleta & frozen pop catering',
		'name'        => 'Dallas Paleta Catering',
		'url'         => get_permalink(),
		'provider'    => array(
			'@type'     => 'Organization',
			'name'      => 'Mom & Pops All Natural Frozen Pops',
			'url'       => home_url( '/' ),
			'telephone' => '+1-469-866-1417',
			'email'     => 'mike@lovemomandpops.com',
			// No PostalAddress on purpose: Dallas is a staffed service area, not a storefront (D4).
		),
		'areaServed'  => array(
			// TODO (open input B): confirm the final Dallas service-area cities / ZIPs.
			array(
				'@type' => 'City',
				'name'  => 'Dallas',
			),
			array(
				'@type' => 'City',
				'name'  => 'Fort Worth',
			),
			array(
				'@type' => 'City',
				'name'  => 'Plano',
			),
			array(
				'@type' => 'City',
				'name'  => 'Frisco',
			),
			array(
				'@type' => 'City',
				'name'  => 'Irving',
			),
			array(
				'@type' => 'City',
				'name'  => 'Arlington',
			),
		),
		'sameAs'      => array(
			'https://www.facebook.com/MomAndPopsAllNatural/',
			'https://www.instagram.com/lovemomandpops/',
		),
	);
}
