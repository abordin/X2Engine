<?php

return array(
	'testUser' => array(
		'id' => 30,
		'assignedTo' => 'Anyone',
		'name' => 'Follow-up',
		'description' => NULL,
		'type' => 'static',
		'logicType' => 'AND',
		'modelName' => 'Contacts',
		'visibility' => '1',
		'count' => '1',
		'createDate' => '1371871507',
		'lastUpdated' => '1372728516',
	),
	'testNewsletter' => array(
		'id' => 31,
		'assignedTo' => 'admin',
		'name' => 'test newsletter',
		'type' => 'weblist',
		'logicType' => 'AND',
		'modelName' => 'Contacts',
		'createDate' => '1371871507',
		'lastUpdated' => '1372728516',
		'count' => 1,
		'visibility' => 1,
	),
	'testNewsletterCampaign' => array(
		'id' => 32,
		'assignedTo' => 'admin',
		'name' => 'test newsletter campaign',
		'type' => 'campaign',
		'logicType' => 'AND',
		'modelName' => 'Contacts',
		'visibility' => 1,
		'count' => 1,
		'createDate' => '1371871507',
		'lastUpdated' => '1372728516',
	),
    'launchedEmailCampaign' => array(
        'id' => '16',
        'assignedTo' => 'admin',
        'name' => 'Campaign Testing',
        'description' => NULL,
        'type' => 'campaign',
        'logicType' => 'AND',
        'modelName' => 'Contacts',
        'visibility' => '1',
        'count' => '4',
        'createDate' => '1387560057',
        'lastUpdated' => '1387560057',
    ),
);
?>
