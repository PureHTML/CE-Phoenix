<?php
/*
  $Id: articles.php, v1.0 2003/12/04 12:00:00 ra Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/


define('NAVBAR_TITLE', 'Article');
define('HEADING_TITLE', 'Articles');

define('TEXT_MAIN', '');
define('TABLE_HEADING_NEW_ARTICLES', 'New Articles in %s');

define('TEXT_NO_ARTICLES', 'There are currently no articles in this topic.');
define('TEXT_NO_ARTICLES2', 'There are currently no articles available from this author.');
define('TEXT_NO_ARTICLES_BLOG', 'There are currently no blog articles available.');

if ( ($topic_depth == 'articles') || (isset($_GET['authors_id'])) ) {
  define('HEADING_TITLE', 'Articles');
  define('TABLE_HEADING_ARTICLES', 'Articles');
  define('TABLE_HEADING_AUTHOR', 'Author');
  define('TEXT_NUMBER_OF_ARTICLES', 'Number of Articles: ');
  define('TEXT_SHOW', 'Display:');
  define('TEXT_NOW', '\' now');
  define('TEXT_ALL_TOPICS', 'All Topics');
  define('TEXT_ALL_AUTHORS', 'All Authors');
  define('TEXT_ARTICLES_BY', ' by ');
  define('TEXT_ARTICLES', 'Below is a list of articles with the most recent ones listed first.');
  define('TEXT_DATE_ADDED', 'Published:');
  define('TEXT_AUTHOR', 'Author:');
  define('TEXT_TOPIC', 'Topic:');
  define('TEXT_BY_AM', 'by');
  define('TEXT_READ_MORE', 'Read More...');
  define('TEXT_MORE_INFORMATION', 'For more information, please visit this authors <a href="https://%s" target="_blank">web page</a>.');
} elseif ($topic_depth == 'top') {
  define('HEADING_TITLE', 'All Articles');
  define('HEADING_TITLE_BLOG', 'All Blog Articles');
  define('TEXT_ALL_ARTICLES', 'Below is a list of all articles with the most recent ones listed first.');
  define('TEXT_ARTICLES', 'Below is a list of all articles with the most recent ones listed first.');
  define('TEXT_CURRENT_ARTICLES', 'Current Articles');
  define('TEXT_UPCOMING_ARTICLES', 'Upcoming Articles');
  define('TEXT_NO_ARTICLES', 'There are currently no articles listed.');
  define('TEXT_DATE_ADDED', 'Published:');
  define('TEXT_DATE_EXPECTED', 'Expected:');
  define('TEXT_AUTHOR', 'Author:');
  define('TEXT_TOPIC', 'Topic:');
  define('TEXT_BY_AM', 'by');
  define('TEXT_READ_MORE', 'Read More...');
} elseif ($topic_depth == 'nested') {
  define('HEADING_TITLE', 'Articles');
}

  define('TEXT_CURRENT_BLOG_ARTICLES', 'Current Blog Articles');
