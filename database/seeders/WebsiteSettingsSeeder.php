<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Seeder;

class WebsiteSettingsSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'key' => 'theme',
                'value' => 'atom',
                'comment' => 'Specifies the theme of the CMS',
            ],
            [
                'key' => 'hotel_name',
                'value' => 'Habbo',
                'comment' => 'Specifies the name of the hotel',
            ],
            [
                'key' => 'rcon_ip',
                'value' => '127.0.0.1',
                'comment' => 'Specifies the RCON IP used for the CMS to perform RCON commands',
            ],
            [
                'key' => 'rcon_port',
                'value' => '3001',
                'comment' => 'Specifies the RCON port used for the CMS to perform RCON commands',
            ],
            [
                'key' => 'start_motto',
                'value' => sprintf('I love %s hotel', setting('hotel_name')),
                'comment' => 'Specifies the start motto the user gets assigned upon registration',
            ],
            [
                'key' => 'start_credits',
                'value' => '5000',
                'comment' => 'Specifies the amount of start credits upon registration',
            ],
            [
                'key' => 'start_duckets',
                'value' => '5000',
                'comment' => 'Specifies the amount of start duckets upon registration',
            ],
            [
                'key' => 'start_diamonds',
                'value' => '100',
                'comment' => 'Specifies the amount of start diamonds upon registration',
            ],
            [
                'key' => 'start_points',
                'value' => '0',
                'comment' => 'Specifies the amount of start points upon registration',
            ],
            [
                'key' => 'avatar_imager',
                'value' => 'https://www.habbo.com/habbo-imaging/avatarimage?figure=',
                'comment' => 'The base url for the imager used to render avatars on the CMS',
            ],
            [
                'key' => 'start_look',
                'value' => 'fa-201407-1324.hr-828-1035.ch-3001-1261-1408.sh-3068-92-1408.cp-9032-1308.lg-270-1281.hd-209-3',
                'comment' => 'Specifies the amount of start outfit upon registration',
            ],
            [
                'key' => 'referrals_needed',
                'value' => '5',
                'comment' => 'Specifies the amount of referrals needed before being able to claim the reward',
            ],
            [
                'key' => 'referral_reward_amount',
                'value' => '30',
                'comment' => 'Specifies the reward amount when a user claims a reward',
            ],
            [
                'key' => 'discord_invitation_link',
                'value' => 'https://discord.gg/rX3aShUHdg',
                'comment' => 'The link used to invite people to your Discord server',
            ],
            [
                'key' => 'discord_widget_id',
                'value' => '1008150166521524264',
                'comment' => 'The Discord widget ID you want to show on the CMS',
            ],
            [
                'key' => 'min_staff_rank',
                'value' => '4',
                'comment' => 'The minimum rank before being considered a staff member',
            ],
            [
                'key' => 'swf_path',
                'value' => '/client/flash/swfs',
                'comment' => 'The path to the SWF folder',
            ],
            [
                'key' => 'group_badge_path',
                'value' => '/ms-swf/c_images/Badgeparts/generated',
                'comment' => 'The path that contains all the generated group badges',
            ],
            [
                'key' => 'maintenance_enabled',
                'value' => '0',
                'comment' => 'Determines if maintenance is enabled or not',
            ],
            [
                'key' => 'min_maintenance_login_rank',
                'value' => '5',
                'comment' => 'Determines the minimum rank before being able to login while maintenance is activated',
            ],
            [
                'key' => 'maintenance_message',
                'value' => 'Atom is currently undergoing maintenance. We will be back shortly!',
                'comment' => 'The maintenance message displayed to users while maintenance is activated',
            ],
        ];

        WebsiteSetting::query()->upsert($settings, ['key'], ['key', 'value']);
    }
}
