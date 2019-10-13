<?php
/*
 * This file is part of Xblog.
 * This file defines variables to config your blog.
 * Rendered in admin/settings.blade.php
 * Support type:
 *   1. text
 *   2. textarea
 *   3. radio
 *   4. number
 *   5. others
 */
return [
    'groups' => [
        [
            'group_name' => 'Commonly used',
            'children' => [
                [
                    'name' => 'google_analytics',
                    'type' => 'radio',
                    'default' => 'false',
                    'values' => [
                        'true' => 'Enable Google Analytics',
                        'false' => 'Disable Google Analytics',
                    ],
                ],
                [
                    'name' => 'enable_mail_notification',
                    'type' => 'radio',
                    'default' => 'false',
                    'values' => [
                        'true' => 'Enable email notifications',
                        'false' => 'Disable email notifications',
                    ],
                ],
                [
                    'name' => 'comment_type',
                    'type' => 'radio',
                    'default' => 'raw',
                    'values' => [
                        'none' => 'Comments Disabled',
                        'raw' => 'Commnets',
                        'disqus' => 'Disqus',
                    ],
                ],
                [
                    'name' => 'allow_comment',
                    'type' => 'radio',
                    'default' => 'true',
                    'values' => [
                        'true' => 'Comments Allowed',
                        'false' => 'Prohibited Comments',
                    ],
                ],
                [
                    'name' => 'enable_hot_posts',
                    'type' => 'radio',
                    'default' => 'false',
                    'values' => [
                        'true' => 'Enable popular articles',
                        'false' => 'Disable popular articles',
                    ],
                ],
                [
                    'name' => 'open_pay',
                    'type' => 'radio',
                    'default' => 'false',
                    'values' => [
                        'true' => 'Enable Appreciation',
                        'false' => 'Disable Appreciation',
                    ],
                ],
                [
                    'name' => 'pay_description',
                    'label' => 'Appreciation Comment',
                    'default' => 'Written well, sponsor the the Cause'
                ],
            ]
        ],

        [
            'group_name' => 'Personal information',
            'children' => [
                [
                    'name' => 'author',
                    'label' => 'Author',
                ],
                [
                    'name' => 'description',
                    'label' => 'Description',
                ],
                [
                    'name' => 'avatar',
                    'label' => 'Avatar',
                ],
                [
                    'name' => 'other_information',
                    'type' => 'textarea',
                    "placeholder" => "Supports Text and Html",
                    'label' => 'Other Information',
                ],
                [
                    'name' => 'social_facebook',
                    'label' => 'Facebook link',
                ],
                [
                    'name' => 'social_twitter',
                    'label' => 'Twitter link',
                ],
                [
                    'name' => 'social_github',
                    'label' => 'GitHub link',
                ],
                [
                    'name' => 'social_instagram',
                    'label' => 'Instagram link',
                ],
                [
                    'name' => 'social_googleplus',
                    'label' => 'Google+ link',
                ],
                [
                    'name' => 'social_tumblr',
                    'label' => 'Tumblr link',
                ],
                [
                    'name' => 'social_linkedin',
                    'label' => 'LinkedIn link',
                ],
                [
                    'name' => 'social_pinterest',
                    'label' => 'Pinterest link',
                ],
                [
                    'name' => 'social_youtube',
                    'label' => 'YouTube link',
                ],
            ]
        ],
        [
            'group_name' => 'website',
            'children' => [
                [
                    'name' => 'google_trace_id',
                    'label' => 'Google Tracking ID',
                    'placeholder' => 'Enter Google Tracking ID'
                ],
                [
                    'name' => 'disqus_shortname',
                    'label' => 'Disqus ID',
                ],
                [
                    'name' => 'github_username',
                    'label' => 'Github UserName',
                ],
                [
                    'name' => 'blog_brand',
                    'label' => 'Logo',
                    "placeholder" => "Supports Text and Html",
                    "type" => "textarea"
                ],
                [
                    'name' => 'site_title',
                    'label' => 'Website Title',
                ],
                [
                    'name' => 'site_keywords',
                    'label' => 'Keyword(s)',
                    "placeholder" => "Enter Website keyword"
                ],
                [
                    'name' => 'site_description',
                    'label' => 'Short Description',
                ],
                [
                    'name' => 'site_header_title',
                    'label' => 'Website Head Title',
                ],
                [
                    'name' => 'page_size',
                    'label' => 'Number of Posts per page',
                    'default' => 7,
                    "type" => "number"
                ],
                [
                    'name' => 'hot_posts_count',
                    'label' => 'Popular article count',
                    'default' => 5,
                    "type" => "number"
                ],
                [
                    'name' => 'case_number',
                    'label' => 'record number'
                ],
            ]
        ],
        [
            'group_name' => 'Image',
            'children' => [

                [
                    'name' => 'profile_image',
                    'label' => 'Profile picture',
                ],
                [
                    'name' => 'header_bg_image',
                    'label' => 'Header background image',
                ],
                [
                    'name' => 'header_image_provider',
                    'type' => 'radio',
                    'default' => 'none',
                    'label' => 'Dynamic Header Background Picture',
                    'values' => [
                        'none' => 'None',
                        'bing' => 'Bing Daily Wallpaper',
                        'picsum' => 'Picsum',
                    ],
                ],
                [
                    'name' => 'header_image_update_rate',
                    'type' => 'radio',
                    'default' => 'every_day',
                    'label' => 'Dynamic Header background image update frequency',
                    'values' => [
                        'every_minute' => 'Every minute',
                        'every_hour' => 'Every Hour',
                        'every_day' => 'Every Day',
                        'every_week' => 'Every Week',
                    ],
                ],
                [
                    'name' => 'admin_sidebar_bg_image',
                    'label' => 'Dashboard background image',
                ],
                [
                    'name' => 'home_bg_images',
                    'label' => 'Home background image',
                    "type" => "textarea",
                    "placeholder" => "Can be multiple, one line per line"
                ],
                [
                    'name' => 'zhifubao_pay_image_url',
                    'label' => 'Alipay payment QR code',
                ],
                [
                    'name' => 'wechat_pay_image_url',
                    'label' => 'WeChat payment QR code',
                ],
            ]
        ],
    ],
];