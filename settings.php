<?php


set_time_limit(0);
ini_set('memory_limit', '40240M');

$conf['alfresco_url'] = 'http://localdev/alfresco_images/New/'; //dev config
$conf['cmis_repositories'] = array(
  'default' => array(
    'user' => 'admin',
    'password' => 'admin',
    'url' => 'http://localdev:8080/alfresco/service/cmis',
  )
);

$conf['cmis_sync_map'] = array(
 'article' => array(
     'enabled' => TRUE,
     'cmis_sync_cron_enabled' => TRUE,
     'cmis_folderPath' => '/Sites/New/Article/Published/2015/01',
     'full_sync_next_cron' => TRUE,
     'cmis_sync_nodeapi_enabled' => TRUE,
     'subfolders' => TRUE,
     'cmis_type' => 'adv:article',
     'content_field' => 'body',
   ),
);
$conf['cmis_sync_map']['article']['fields'] = array(
  array('drupal' => 'title', 'cmis' => 'cmis:name', 'drupal to cmis' => TRUE, 'cmis to drupal' => TRUE),
  array('drupal' => 'body', 'cmis' => 'cm:content', 'drupal to cmis' => TRUE, 'cmis to drupal' => TRUE),
  array('drupal' => 'field_object_id', 'cmis' => 'cmis:objectId', 'drupal to cmis' => TRUE, 'cmis to drupal' => TRUE),
  array('drupal' => 'field_article_files', 'cmis' => 'adv:articleFiles', 'drupal to cmis' => TRUE, 'cmis to drupal' => TRUE),
  array('drupal' => 'field_file', 'cmis'=>'cm:source', 'drupal to cmis' => TRUE, 'cmis to drupal' => TRUE),
  array('drupal' => 'field_article_date', 'cmis'=>'cmis:contentStreamFileName', 'drupal to cmis' => TRUE, 'cmis to drupal' => TRUE),
  array('drupal' => 'article_file_creation_date', 'cmis'=>'cmis:creationDate', 'drupal to cmis' => TRUE, 'cmis to drupal' => TRUE),
  array('drupal' => 'field_article_status', 'cmis'=>'adv:articleStatus', 'drupal to cmis' => TRUE, 'cmis to drupal' => TRUE),
   array('drupal' => 'field_article_link_display', 'cmis'=>'adv:articleLinkDisplay', 'drupal to cmis' => TRUE, 'cmis to drupal' => TRUE),
);
?>
