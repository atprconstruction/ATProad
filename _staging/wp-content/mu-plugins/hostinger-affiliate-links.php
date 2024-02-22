<?php
/**
 * Plugin Name: Affiliate Plugin
 * Description: "Affiliate Plugin" serves the purpose of integrating affiliate links into the WordPress website.
 * Version: 1.0.1
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Hostinger_MU_Affiliates {
    const AFFILIATE_ID = '3107422';
    const ASTRA_ID = '12425';

    public function __construct() {
        if ( is_admin() ) {
            $this->define_admin_hooks();
        }

        add_action( 'init', array( $this, 'schedule_weekly_cron_job' ) );
    }

    public function affiliate_astra() {
        add_option( 'astra_partner_url_param', self::ASTRA_ID, '', 'no' );
    }

    public function affiliate_monsterinsights( $id ) {
        return self::AFFILIATE_ID;
    }

    public function wpforms_upgrade_link( $link ) {
        return 'https://shareasale.com/r.cfm?b=834775&u=3107422&m=64312&urllink=' . rawurlencode( $link );
    }

    public function aioseo_upgrade_link( $link ) {
        return 'https://shareasale.com/r.cfm?b=1491200&u=3107422&m=94778&urllink=' . rawurlencode( $link );
    }

    private function define_admin_hooks() {
        add_filter( 'optinmonster_sas_id', array( $this, 'affiliate_monsterinsights' ) );
        add_filter( 'monsterinsights_shareasale_id', array( $this, 'affiliate_monsterinsights' ) );
        add_filter( 'wpforms_upgrade_link', array( $this, 'wpforms_upgrade_link' ) );
        add_filter( 'aioseo_upgrade_link', array( $this, 'aioseo_upgrade_link' ) );
    }

    public function schedule_weekly_cron_job() {
        if ( ! wp_next_scheduled( 'run_weekly_affiliate_astra' ) ) {
            wp_schedule_event( time(), 'weekly', 'run_weekly_affiliate_astra' );
        }
        add_action( 'run_weekly_affiliate_astra', array( $this, 'run_weekly_affiliate_astra' ) );
    }

    public function run_weekly_affiliate_astra() {
        if ( ! get_option( 'astra_partner_url_param' ) ) {
            $this->affiliate_astra();
        }
    }
}

new Hostinger_MU_Affiliates();
