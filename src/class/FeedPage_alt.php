<?php
/**
 * altFeedPage
 */
 
 class altFeedPage
{
    public static $var = array();
    private static $_instance;

    /**
     * initialize private instance of FeedPage class
     *
     * @param array $var list of useful variables for template
     */
    public static function init($var)
    {
        altFeedPage::$var = $var;
    }

    /**
     * includesTpl
     * 
     */
    public static function includesTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/includes.tpl.php"); ?>
<?php
    }

    /**
     * installTpl
     * 
     */
    public static function installTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/install.tpl.php"); ?>
<?php
    }

    /**
     * loginTpl
     * 
     */
    public static function loginTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/login.tpl.php"); ?>
<?php
    }

    /**
     * changePasswordTpl
     * 
     */
    public static function changePasswordTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/change_password.tpl.php"); ?>
<?php
    }

    /**
     * statusTpl
     * 
     */
    public static function statusTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/status.tpl.php"); ?>
<?php
    }

    /**
     * configTpl
     * 
     */
    public static function configTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/config.tpl.php"); ?>
<?php
    }

    /**
     * helpTpl
     * 
     */
    public static function helpTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/help.tpl.php"); ?>
<?php
    }

    /**
     * addFeedTpl : Add a new feed
     * 
     */
    public static function addFeedTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/add_feed.tpl.php"); ?>
<?php
    }

    /**
     * editAllTpl : Edit all feed page
     * 
     */
    public static function editAllTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/edit_all.tpl.php"); ?>
<?php
    }

    /**
     * editFolderTpl : Edit folder page
     * 
     */
    public static function editFolderTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/edit_folder.tpl.php"); ?>
<?php
    }

    /**
     * editFeedTpl : Edit feed page
     * 
     */
    public static function editFeedTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/edit_feed.tpl.php"); ?>
<?php
    }

    /**
     * updateTpl : update page
     * 
     */
    public static function updateTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/update.tpl.php"); ?>
<?php
    }

    /**
     * importTpl : import page
     * 
     */
    public static function importTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/import.tpl.php"); ?>
<?php
    }

    /**
     * listFeedsTpl : list feeds ul
     * 
     */
    public static function listFeedsTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/list_feeds.tpl.php"); ?>
<?php
    }

    /**
     * listItemsTpl : list items
     * 
     */
    public static function listItemsTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/list_items.tpl.php"); ?>
<?php
    }


   /**
     * altitemTpl : Full display opened current item
     * 
     */
    public static function itemTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/item.tpl.php"); ?>
<?php
    } 
    
    /**
     * indexTpl : index page
     * 
     */
    public static function indexTpl()
    {
        extract(altFeedPage::$var);
?>
<?php include("tpl_alt/index.tpl.php"); ?>
<?php
    }
}


 
