<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Base\Constants\Setting\Settings as SettingSlug;
use App\Base\Constants\Setting\SettingCategory;
use App\Base\Constants\Setting\SettingSubGroup;
use App\Base\Constants\Setting\SettingValueType;

class SettingsSeeder extends Seeder
{
    /**
     * List of all the settings_from_seeder to be created along with their details.
     *
     * @var array
     */
    protected $settings_from_seeder = [

      
        SettingSlug::TRIP_DISPTACH_TYPE => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 1,
            'field' => SettingValueType::SELECT,
            'option_value' => '{"one-by-one":1,"to-all-drivers":0}',
            'group_name' => null,
        ],
        
        SettingSlug::MINIMUM_WALLET_AMOUNT_FOR_TRANSFER => [
            'category'=>SettingCategory::WALLET,
            'value' => 500,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],

         SettingSlug::DRIVER_SEARCH_RADIUS => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 3,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::USER_CAN_MAKE_A_RIDE_AFTER_X_MINIUTES => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::MINIMUM_TIME_FOR_SEARCH_DRIVERS_FOR_SCHEDULE_RIDE => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::MAXIMUM_TIME_FOR_FIND_DRIVERS_FOR_REGULAR_RIDE => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 5,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::MAXIMUM_TIME_FOR_FIND_DRIVERS_FOR_BITTING_RIDE => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 5,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::TRIP_ACCEPT_REJECT_DURATION_FOR_DRIVER => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::HOW_MANY_TIMES_A_DRIVER_TIMES_A_DRIVER_CAN_ENABLE_THE_MY_ROUTE_BOOKING_PER_DAY => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 1,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],   
        SettingSlug::ENABLE_MY_ROUTE_BOOKING_FEATURE => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 1,
             'field' => SettingValueType::SELECT,
             'option_value' => '{"yes":1,"no":0}',
             'group_name' => null,
        ],       
    //General category settings
        SettingSlug::LOGO => [
            'category'=>SettingCategory::GENERAL,
            'value' => null,
            'field' => SettingValueType::FILE,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::FAVICON => [
            'category'=>SettingCategory::GENERAL,
            'value' => null,
            'field' => SettingValueType::FILE,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::LOGINBG => [
            'category'=>SettingCategory::GENERAL,
            'value' => null,
            'field' => SettingValueType::FILE,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::NAV_COLOR => [
            'category'=>SettingCategory::GENERAL,
            'value' => '#0B4DD8',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::SIDEBAR_COLOR => [
            'category'=>SettingCategory::GENERAL,
            'value' => '#2a3042',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::SIDEBARTXT_COLOR => [
            'category'=>SettingCategory::GENERAL,
            'value' => '#a2a5af',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::APP_NAME => [
            'category'=>SettingCategory::GENERAL,
            'value' => 'Tagxi',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::CURRENCY => [
            'category'=>SettingCategory::GENERAL,
            'value' => 'INR',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::CURRENCY_SYMBOL => [
            'category'=>SettingCategory::GENERAL,
            'value' => '₹',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::DEFAULT_COUNTRY_CODE_FOR_MOBILE_APP => [
            'category'=>SettingCategory::GENERAL,
            'value' => 'IN',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::CONTACT_US_MOBILE1 => [
            'category'=>SettingCategory::GENERAL,
            'value' => '0000000000',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::CONTACT_US_MOBILE2 => [
            'category'=>SettingCategory::GENERAL,
            'value' => '0000000000',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::CONTACT_US_LINK => [
            'category'=>SettingCategory::GENERAL,
            'value' => 'https://tagxi-landing.ondemandappz.com/',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::SHOW_WALLET_FEATURE_ON_MOBILE_APP => [
            'category'=>SettingCategory::GENERAL,
             'value' => 1,
             'field' => SettingValueType::SELECT,
             'option_value' => '{"yes":1,"no":0}',
             'group_name' => null,
        ],
        SettingSlug::SHOW_WALLET_FEATURE_ON_MOBILE_APP_DRIVER => [
            'category'=>SettingCategory::GENERAL,
             'value' => 1,
             'field' => SettingValueType::SELECT,
             'option_value' => '{"yes":1,"no":0}',
             'group_name' => null,
        ],    
        SettingSlug::SHOW_INSTATNT_RIDE_FEATURE_ON_MOBILE_APP => [
            'category'=>SettingCategory::GENERAL,
             'value' => 1,
             'field' => SettingValueType::SELECT,
             'option_value' => '{"yes":1,"no":0}',
             'group_name' => null,
        ],   
        SettingSlug::SHOW_OWNER_MODULE_ON_MOBILE_APP => [
            'category'=>SettingCategory::GENERAL,
             'value' => 1,
             'field' => SettingValueType::SELECT,
             'option_value' => '{"yes":1,"no":0}',
             'group_name' => null,
        ], 
        SettingSlug::SHOW_WALLET_MONEY_TRANSFER_FEAUTRE_ON_MOBILE_APP => [
            'category'=>SettingCategory::GENERAL,
             'value' => 1,
             'field' => SettingValueType::SELECT,
             'option_value' => '{"yes":1,"no":0}',
             'group_name' => null,
        ], 
        SettingSlug::SHOW_WALLET_MONEY_TRANSFER_FEAUTRE_ON_MOBILE_APP_FOR_DRIVER => [
            'category'=>SettingCategory::GENERAL,
             'value' => 1,
             'field' => SettingValueType::SELECT,
             'option_value' => '{"yes":1,"no":0}',
             'group_name' => null,
        ], 
        SettingSlug::SHOW_EMAIL_OTP_FEAUTRE_ON_MOBILE_APP => [
            'category'=>SettingCategory::GENERAL,
             'value' => 1,
             'field' => SettingValueType::SELECT,
             'option_value' => '{"yes":1,"no":0}',
             'group_name' => null,
        ],         
        SettingSlug::SHOW_BANK_INFO_FEATURE_ON_MOBILE_APP => [
            'category'=>SettingCategory::GENERAL,
            'value' => 1,
             'field' => SettingValueType::SELECT,
             'option_value' => '{"yes":1,"no":0}',
             'group_name' => null,
        ],  
        SettingSlug::DRIVER_WALLET_MINIMUM_AMOUNT_TO_GET_ORDER => [
            'category'=>SettingCategory::WALLET,
            'value' => -10000,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::OWNER_WALLET_MINIMUM_AMOUNT_TO_GET_ORDER => [
            'category'=>SettingCategory::WALLET,
            'value' => -10000,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        // Installation settings
/*mercadopago*/
        SettingSlug::ENABLE_MERCADOPAGO => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::MERCADOPAGO_SETTINGS,
        ],

         SettingSlug::MERCADOPAGO_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'field' => SettingValueType::SELECT,
            'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::MERCADOPAGO_SETTINGS,
        ],

        SettingSlug::MERCADOPAGO_TEST_PUBLIC_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'TEST-rkmfkmfkrfkrf-d29d-4af3-9ec8-3a366275cec8',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::MERCADOPAGO_SETTINGS,
        ],
        SettingSlug::MERCADOPAGO_LIVE_PUBLIC_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'TEST-ekmverkrggr-d29d-4af3-9ec8-3a366275cec8',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::MERCADOPAGO_SETTINGS,
        ],

        SettingSlug::MERCADOPAGO_TEST_ACCESS_TOKEN => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'TEST-k-ermrffmfkrfm-3db3401292f6ae1a11daed3a22b8db62-762016080',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::MERCADOPAGO_SETTINGS,
        ],
        SettingSlug::MERCADOPAGO_LIVE_ACCESS_TOKEN => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'TEST-k-ermrffmfkrfm-3db3401292f6ae1a11daed3a22b8db62-762016080',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::MERCADOPAGO_SETTINGS,
        ],        
/**/

        SettingSlug::ENABLE_STRIPE => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

         SettingSlug::STRIPE_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'field' => SettingValueType::SELECT,
             'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

         SettingSlug::STRIPE_TEST_PUBLISHABLE_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'kerkrrkfrfkfrkrfkrfmfkmk',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

        SettingSlug::STRIPE_LIVE_PUBLISHABLE_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'kerkrrkfrfkfrkrfkrfmfkmk',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

        SettingSlug::STRIPE_TEST_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'jdnvjngjgjrgjgjrgrjjg',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

        SettingSlug::STRIPE_LIVE_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'jdnvjngjgjrgjgjrgrjjg',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

        SettingSlug::ENABLE_PAYSTACK => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::PAYSTACK_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'field' => SettingValueType::SELECT,
             'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::PAYSTACK_TEST_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'jnvjngjrgnjgnjgrjg',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::PAYSTACK_PRODUCTION_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'jnvjngjrgnjgnjgrjg',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],

        SettingSlug::PAYSTACK_TEST_PUBLISHABLE_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'njfnjnjbbnjnjnjtg',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::PAYSTACK_PRODUCTION_PUBLISHABLE_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'njfnjnjbbnjnjnjtg',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::ENABLE_FLUTTER_WAVE => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::FLUTTERWAVE_SETTINGS,
        ],
         SettingSlug::FLUTTER_WAVE_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'field' => SettingValueType::SELECT,
             'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::FLUTTERWAVE_SETTINGS,
        ],
        SettingSlug::FLUTTER_WAVE_TEST_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'jwnjnrjjjjrfrrfjj',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::FLUTTERWAVE_SETTINGS,
        ],
        SettingSlug::FLUTTER_WAVE_PRODUCTION_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'jwnjnrjjjjrfrrfjj',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::FLUTTERWAVE_SETTINGS,
        ],

//Razor_pay
        SettingSlug::ENABLE_RAZOR_PAY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],

         SettingSlug::RAZOR_PAY_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'test',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],

        SettingSlug::RAZOR_PAY_TEST_API_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'jnjtjgtgjtgjgj',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],
        SettingSlug::RAZOR_PAY_LIVE_API_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],
        SettingSlug::RAZOR_PAY_LIVE_SECRECT_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => ' ',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],
        SettingSlug::RAZOR_PAY_TEST_SECRECT_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'jrnvjrgngrgjrg',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],
/*ccavenue*/
        // SettingSlug::ENABLE_CCAVENUE=> [
        //     'category'=>SettingCategory::INSTALLATION,
        //     'value' => '1',
        //     'field' => SettingValueType::SELECT,
        //     'option_value' => '{"yes":1,"no":0}',
        //     'group_name' => SettingSubGroup::CCAVENUE_SETTINGS,
        // ],
        SettingSlug::WORKING_KEY=> [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '679B1A4387D10902995FC11DE9DC7B6C',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::CCAVENUE_SETTINGS,
        ],
        SettingSlug::ACCESS_CODE=> [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'AVWH88JF34BF85HWFB',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::CCAVENUE_SETTINGS,
        ],
        SettingSlug::MERCHANT_ID=> [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '987718',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::CCAVENUE_SETTINGS,
        ],
        SettingSlug::RESPONSE_URL=> [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'https://girki.co.in/api/v1/ccavenue/webhook',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => SettingSubGroup::CCAVENUE_SETTINGS,
        ],

        SettingSlug::ENABLE_KHALTI_PAY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::KHALTI_PAY_SETTINGS,
        ],

        SettingSlug::KHALTI_PAY_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'test',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::KHALTI_PAY_SETTINGS,
        ],

        SettingSlug::KHALTI_PAY_TEST_API_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'test_public_key_5066528dae744acb967edfae71959934',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::KHALTI_PAY_SETTINGS,
        ],
        SettingSlug::KHALTI_PAY_LIVE_API_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'live_public_key_29ae51e22ee44ad088147563405c3b35',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::KHALTI_PAY_SETTINGS,
        ],
//paypal
        SettingSlug::ENABLE_PAYPAL => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::PAYPAL_SETTINGS,
        ],

         SettingSlug::PAYPAL_MODE => [
            'category'=>SettingCategory::INSTALLATION,
            'field' => SettingValueType::SELECT,
            'value' => 'sandbox',
             'option_value' => '{"sandbox":"sandbox","live":"live"}',
            'group_name' => SettingSubGroup::PAYPAL_SETTINGS,
        ],

         SettingSlug::PAYPAL_SANDBOX_CLIENT_ID => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'emrnjrenfjrjrf-6moi5XQJRY-w3SrmAFFk',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYPAL_SETTINGS,
        ],

        SettingSlug::PAYPAL_SANDBOX_CLIENT_SECRECT => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'ELF9g1BW4zWwkOPMqxSPA6ekrmfkrfkrfkrffzN8hvnCD9WgoOv3BPJUVT1tyC70TCZWKZS-5sdI8-ah3BvdiqDyuAvz2Yh',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYPAL_SETTINGS,
        ],

        SettingSlug::PAYPAL_SANDBOX_APP_ID => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'APP-jefnfjnfje',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYPAL_SETTINGS,
        ],
         SettingSlug::PAYPAL_LIVE_CLIENT_ID => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'your-key',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYPAL_SETTINGS,
        ],

        SettingSlug::PAYPAL_LIVE_CLIENT_SECRECT => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'your-key',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYPAL_SETTINGS,
        ],

        SettingSlug::PAYPAL_LIVE_APP_ID => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'your-key',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYPAL_SETTINGS,
        ],
        SettingSlug::PAYPAL_NOTIFY_URL => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'your-key',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYPAL_SETTINGS,
        ],
        SettingSlug::REFERRAL_COMMISION_FOR_USER => [
            'category'=>SettingCategory::REFERRAL,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
          SettingSlug::REFERRAL_COMMISION_FOR_DRIVER => [
            'category'=>SettingCategory::REFERRAL,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        //  SettingSlug::MINIMUM_TRIPS_SHOULD_COMPLETE_TO_REFER_DRIVERS => [
        //     'category'=>SettingCategory::REFERRAL,
        //     'value' => 30,
        //     'field' => SettingValueType::TEXT,
        //     'option_value' => null,
        //     'group_name' => null,
        // ],

        SettingSlug::ENABLE_VASE_MAP => [
            'category'=>SettingCategory::MAP_SETTINGS,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => null,
        ],
        SettingSlug::MAP_TYPE => [
            'category'=>SettingCategory::MAP_SETTINGS,
            'value' => 'google',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"google":"google","open_street":"open_street"}',
            'group_name' => null,
        ],        
        SettingSlug::GOOGLE_MAP_KEY => [
            'category'=>SettingCategory::MAP_SETTINGS,
            'value' => 'jfvjnfvjnvjfnvv-3h2Qk8RA3Y',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::GOOGLE_MAP_KEY_FOR_DISTANCE_MATRIX => [
            'category'=>SettingCategory::MAP_SETTINGS,
            'value' => 'ejnfrnjjrnjfjrfjr',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::GOOGLE_SHEET_ID => [
            'category'=>SettingCategory::MAP_SETTINGS,
            'value' => 'kfmbktrmgkmgt-jnbjhjbhhvg',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::DEFAULT_LAT => [
            'category'=>SettingCategory::MAP_SETTINGS,
            'value' => 11.21215,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::DEFAULT_LONG => [
            'category'=>SettingCategory::MAP_SETTINGS,
            'value' => 76.54545,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::FIREBASE_DB_URL => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'https://your-db.firebaseio.com',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::FIREBASE_API_KEY => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-api-key',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => null,
        ],
           SettingSlug::FIREBASE_AUTH_DOMAIN => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-auth-domain',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::FIREBASE_PROJECT_ID => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-firebase-project-id',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::FIREBASE_STORAGE_BUCKET => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-firebase-storage-bucket',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::FIREBASE_MESSAGIN_SENDER_ID => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-firebase-messaging-sender-id',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::FIREBASE_APP_ID => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-app-id',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::FIREBASE_MEASUREMENT_ID => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-firebase-measurement-id',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::CURRENCY => [
            'category'=>SettingCategory::GENERAL,
            'value' => 'INR',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::CURRENCY_SYMBOL => [
            'category'=>SettingCategory::GENERAL,
            'value' => '₹',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::SHOW_RENTAL_RIDE_FEATURE => [
            'category'=>SettingCategory::GENERAL,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => null,
        ],
         SettingSlug::SHOW_RIDE_OTP_FEATURE => [
            'category'=>SettingCategory::GENERAL,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => null,
        ],
         SettingSlug::SHOW_RIDE_LATER_FEATURE => [
            'category'=>SettingCategory::GENERAL,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => null,
        ],
         SettingSlug::SHOW_RIDE_WITHOUT_DESTINATION => [
            'category'=>SettingCategory::GENERAL,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => null,
        ],
        SettingSlug::ENABLE_COUNTRY_RESTRICT_ON_MAP => [
            'category'=>SettingCategory::GENERAL,
            'value' => '0',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => null,
        ],
       /*Mailer Name*/
        SettingSlug::MAIL_MAILER => [
            'category'=>SettingCategory::MAIL_CONFIGURATION,
            'value' => 'smtp',
            'field' => SettingValueType::TEXT,
            'group_name' => null,
        ],
        SettingSlug::MAIL_HOST => [
            'category'=>SettingCategory::MAIL_CONFIGURATION,
            'value' => 'smtp.gmail.com',
            'field' => SettingValueType::TEXT,
            'group_name' => null,
        ],
        SettingSlug::MAIL_PORT => [
            'category'=>SettingCategory::MAIL_CONFIGURATION,
            'value' => '587',
            'field' => SettingValueType::TEXT,
            'group_name' => null,
        ],
        SettingSlug::MAIL_USERNAME => [
            'category'=>SettingCategory::MAIL_CONFIGURATION,
            'value' => 'yourgmail@gmail.com',
            'field' => SettingValueType::PASSWORD,
            'group_name' => null,
        ],
        SettingSlug::MAIL_PASSWORD => [
            'category'=>SettingCategory::MAIL_CONFIGURATION,
            'value' => 'hbhghgvgvgvg',
            'field' => SettingValueType::PASSWORD,
            'group_name' => null,
        ],
        SettingSlug::MAIL_ENCRYPTION => [
            'category'=>SettingCategory::MAIL_CONFIGURATION,
            'value' => 'tls',
            'field' => SettingValueType::TEXT,
            'group_name' => null,
        ],    
        SettingSlug::MAIL_FROM_ADDRESS => [
            'category'=>SettingCategory::MAIL_CONFIGURATION,
            'value' => 'yourgmail@gmail.com',
            'field' => SettingValueType::TEXT,
            'group_name' => null,
        ], 
         SettingSlug::MAIL_FROM_NAME => [
            'category'=>SettingCategory::MAIL_CONFIGURATION,
            'value' => 'misoftwares',
            'field' => SettingValueType::TEXT,
            'group_name' => null,
        ],             
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settingDB = Setting::all();

        foreach ($this->settings_from_seeder as $setting_slug=>$setting) {
            $categoryFound = $settingDB->first(function ($one) use ($setting_slug) {
                return $one->name === $setting_slug;
            });

            $created_params = [
                        'name' => $setting_slug
                    ];

            $to_create_setting_data = array_merge($created_params, $setting);

            if (!$categoryFound) {
                Setting::create($to_create_setting_data);
            }
        }
    }
}
