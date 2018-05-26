<?php
$navigation = [
    'Dashboard' => [
        'txt' => 'Dashboard',
        'icn' => 'fa fa-dashboard',
        'url' => site_url('administrator/dashboard/index')
    ],
    'Content' => [
        'txt' => 'Content',
        'icn' => 'fa fa-sliders',
        'url' => 'javascript:;',
        'sub' => [
                    [
            'txt' => 'Attribute',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/attribute/browse')
            ]
            ,                    [
            'txt' => 'Category',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/category/browse')
            ]
            ,                    [
            'txt' => 'Ci session',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/ci_session/browse')
            ]
            ,                    [
            'txt' => 'City',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/city/browse')
            ]
            ,                    [
            'txt' => 'Continent',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/continent/browse')
            ]
            ,                    [
            'txt' => 'Country',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/country/browse')
            ]
            ,                    [
            'txt' => 'Item',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/item/browse')
            ]
            ,                    [
            'txt' => 'Item has review',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/item_has_review/browse')
            ]
            ,                    [
            'txt' => 'Item has tag',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/item_has_tag/browse')
            ]
            ,                    [
            'txt' => 'Review',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/review/browse')
            ]
            ,                    [
            'txt' => 'Review attribute',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/review_attribute/browse')
            ]
            ,                    [
            'txt' => 'Tag',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/tag/browse')
            ]
            ,                    [
            'txt' => 'User',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/user/browse')
            ]
            ,                    [
            'txt' => 'User data',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/user_data/browse')
            ]
                            ]
    ],
    'My Account' => [
        'txt' => 'My Account',
        'icn' => 'fa fa-user',
        'url' => 'javascript:;',
        'sub' => [
            [
                'txt' => 'My Profile',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/account/index')
            ],
            [
                'txt' => 'Change Password',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/dashboard/password')
            ],
            [
                'txt' => 'Logout',
                'cls' => '',
                'tgt' => '_self',
                'url' => site_url('administrator/auth/logout')
            ]
        ]
    ]
];
?>
<div class="profile-info row">
    <div class="profile-image col-md-4 col-sm-4 col-xs-4">
        <a href="ui-profile.html">
            <img src="<?php echo site_url('assets/data/profile/profile.png'); ?>" class="img-responsive img-circle">
        </a>
    </div>
    <div class="profile-details col-md-8 col-sm-8 col-xs-8">
        <h3>
            <a href="ui-profile.html">Jason Bourne</a>
            <span class="profile-status online"></span>
        </h3>
        <p class="profile-title">Web Developer</p>
    </div>
</div>
<ul class='wraplist'>
    <?php foreach ($navigation as $key => $value): ?>        
    <li class=""> 
            <a href="<?php echo $value['url'];?>">
                <i class="<?php echo $value['icn']; ?>"></i>
                <span class="title"><?php echo $value['txt']; ?></span>
            </a>
            <?php if (isset($value['sub'])): ?>            
                <ul class="sub-menu" >
                    <?php foreach ($value['sub'] as $key1 => $value1): ?>                        
                        <li>
                            <a class="<?php echo $value1['cls']; ?>" href="<?php echo $value1['url']; ?>" target = '<?php echo $value1['tgt']; ?>' >
                                <?php echo $value1['txt']; ?>                                
                            </a>
                        </li>
                    <?php endforeach; ?>                    
                </ul>
            <?php endif; ?>            
        </li>
        <?php endforeach; ?>    
</ul>