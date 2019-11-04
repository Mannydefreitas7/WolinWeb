<?php
/*
Plugin Name: Easy Custom Auto Excerpt Premium
Plugin URI: https://tonjoostudio.com/addons/easy-custom-auto-excerpt-premium/
Description: Easy Custom Auto Excerpt Premium Edition.
Version: 1.4
Author: tonjoo
Author URI: https://www.tonjoostudio.com/
Contributor: Todi Adiyatmo Wijoyo, Haris Ainur Rozak
*/

define('ECAE_PREMIUM_DIR_NAME', str_replace("/easy-custom-auto-excerpt-premium.php", "", plugin_basename(__FILE__)));

function is_ecae_premium_exist(){
	return true;
}

/**
 * Prevent this premium to activate when the free one is inactive
 */
register_activation_hook( __FILE__ , 'ecae_premium_activate' );
function ecae_premium_activate() {
	if(function_exists('tonjoo_ecae_excerpt')) return true;

	deactivate_plugins( __FILE__ );

	$plugin_name = 'Easy Custom Auto Excerpt';
	$plugin_url = 'https://wordpress.org/plugins/easy-custom-auto-excerpt/';

    $str = '<h1>'.$plugin_name.' Free is Required!</h1>';
    $str.= '<p>This premium version is an addon for it\'s free version.<br>';
    $str.= 'Please <strong>Activate</strong> the free version one before activate this premium version.<br>';
    $str.= 'You can download the free version <a target="_blank" href="'.$plugin_url.'"><strong>HERE</strong></a> or if you buy the premium plugin, it\'s on the plugin package.</p>';
    $str.= '<p><a class="button" href='.admin_url('plugins.php').'>Back to the plugin page</a></p>';
    
    wp_die($str);
}

/**
 * Disable excerpt post meta
 */
add_action('add_meta_boxes','ecae_meta_boxes');

function ecae_meta_boxes()
{
    add_meta_box(
        'ecae_meta',
        'ECAE Options',
        'ecae_meta',
        'post',
        'normal',
        "high"
    );
}

function ecae_meta($post)
{
	wp_nonce_field( plugin_basename( __FILE__ ), 'ecae_noncename' );
  	$postmeta = get_post_meta($post->ID, 'ecae_meta', true);

  	if($postmeta == '') $postmeta=array();

  	if(! array_key_exists('disable_excerpt',$postmeta)) {
   		$postmeta['disable_excerpt'] = "no";
  	}

  	// selected
  	if($postmeta['disable_excerpt'] == 'yes'){
  		$selected_ecae_meta['yes'] = 'selected';
  		$selected_ecae_meta['no'] = '';
  	} else {
  		$selected_ecae_meta['yes'] = '';
  		$selected_ecae_meta['no'] = 'selected';
  	}

  	?>

	<table class="form-table">
		<tbody>		
		<tr id="" valign="top">
			<th scope="row">Disable Excerpt ?</th>
			<td>
				<select name="ecae_meta[disable_excerpt]">
					<option <?php echo $selected_ecae_meta['no'] ?> value="no">No</option>
					<option <?php echo $selected_ecae_meta['yes'] ?> value="yes">Yes</option>
				</select>							
			</td>
		</tr>
		</tbody>
	</table>

	<?php
}

add_action('save_post','ecae_save_postdata');

function ecae_save_postdata( $post_id )
{
	// verify if this is an auto save routine.
  	// If it is our form has not been submitted, so we dont want to do anything
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// verify this came from the our screen and with proper authorization,
  	// because save_post can be triggered at other times
	$_POST['ecae_noncename'] = isset($_POST['ecae_noncename']) ? $_POST['ecae_noncename'] : '';
  	if(!wp_verify_nonce( $_POST['ecae_noncename'], plugin_basename( __FILE__ ))) return;

  	// Check permissions
	if ( 'page' == $_POST['post_type'] )
	{
		if ( !current_user_can( 'edit_page', $post_id ) )
		return;
	}
	else
	{
		if ( !current_user_can( 'edit_post', $post_id ) )
		return;
	}

	// Update post meta
	$post_ID = $_POST['post_ID'];
  	$post_meta = $_POST['ecae_meta'];

  	foreach ( $post_meta as $key => $value)
  	{
		$postmeta[$key]= trim($value);
		$postmeta[$key]= esc_attr($value);
	}

	update_post_meta($post_ID,'ecae_meta', $post_meta);
	return $post_id;
}


/**
 * Show 1st - 3rd paragraph
 */
function get_per_paragraph($num,$content)
{
    $arr_content = explode("</p>",$content);
    $ret_content = "";
    $elapsed_num = 0;

    for ($i=0; $i < count($arr_content); $i++)
    {
		if(trim($arr_content[$i]) == '') break;

        $elapsed_num++;

        $ret_content .= $arr_content[$i] . "</p>";

        if($elapsed_num >= $num) break;
    }

    return $ret_content;
}


/**
 * Tonjoo License
 */
if (! class_exists('tonjoo_license')) {
	include(plugin_dir_path(__FILE__) . 'library-license-wordpress/tonjoo_license.php');
}

if (! class_exists('TonjooPluginLicenseECAE'))
{
	class TonjooPluginLicenseECAE
	{
		public function __construct($key)
		{
			$this->opt['name'] = 'tonjoo_ecae_options';
			$this->opt['field'] = 'license_status';

			$option = get_option($this->opt['name']);

			if(! isset($option['license_key'])) $option['license_key'] = '';

			$this->data['plugin_name'] = "ecae-premium";
			$this->data['admin_url'] = admin_url("admin.php?page=tonjoo_excerpt");
			$this->data['key'] = $key === false ? $option['license_key'] : $key;
			$this->data['file'] = __FILE__;
			$this->data['status'] = isset($option[$this->opt['field']]) ? unserialize($option[$this->opt['field']]) : false;
		}

		public function show_notification()
		{
			if(! $this->data['status']['status'])
			{
				$tonjoo = new tonjoo_license();

				$message = "Please enter your <b>Easy Custom Auto Excerpt Premium</b> licese code in <a class='button navbar-button' style='margin:0 5px;' href='". $this->data['admin_url'] ."#opt-license'>Options Page</a>";

				$tonjoo->showNotification($this->data,$message);
			}
		}

		public function reactivate_popup()
		{
			$tonjoo = new tonjoo_license();

			$tonjoo->reactivatePopup($this->data);
		}

		public function set_license()
		{
			$tonjoo = new tonjoo_license();

			return $tonjoo->RegisterKey($this->data);
		}

		public function unset_license()
		{
			$tonjoo = new tonjoo_license();

			return $tonjoo->unRegisterKey($this->data);
		}

		public function get_status()
		{
			$tonjoo = new tonjoo_license();

			$status = $tonjoo->getStatus($this->data);

			return $status;
		}

		public function get_json()
		{
			$tonjoo = new tonjoo_license();

			return $tonjoo->getJsonLocal($this->data);
		}

		public function license_on_save($post)
		{
			if(isset($post['save_status_license']))
			{

				$license_status = $this->get_license_status();
				$license_status['date'] = date('l jS \of F Y h:i:s A', time());

				if(isset($license_status['email']))
				{
					// censoring email
					$license_email = explode('@', $license_status['email']);

					if(isset($license_email[1]))
					{
						$license_email = substr($license_email[0], 0, -3) . '***@' . $license_email[1];
						$license_status['email'] = $license_email;
					}
				}

				$post[$this->opt['name']][$this->opt['field']] = serialize($license_status);
			}
			else if(isset($post['unset_license']))
			{
				$unset_license = $this->unset_license();

				if($unset_license['status'] == false)
				{
					$post[$this->opt['name']][$this->opt['field']] = serialize($this->data['status']);
				}
			}
			else
			{
				$post[$this->opt['name']][$this->opt['field']] = serialize($this->data['status']);
			}

			return $post;
		}

		private function get_license_status()
		{
			$set_license = $this->set_license();

			// if curl enabled
			if($set_license['status'])
			{
				$status = $this->get_status();

				if($status['status'] && $status['data'] != NULL)
				{
					$return = (array) $status['data'];

					return $return;
				}
				else if($status['status'] && $status['data'] == NULL)
				{
					$return['status'] = false;
					$return['message'] = "Our website is temporary down, please try again later";

					return $return;
				}
				else
				{
					$return['status'] = false;
					$return['message'] = $status['data'];

					return $return;
				}
			}
			else
			{
				$return['status'] = false;
				$return['message'] = $set_license['data'];

				return $return;
			}
		}
	}
}

global $PluginLicense;
$PluginLicense = new TonjooPluginLicenseECAE(false);
$PluginLicense->get_json();
$PluginLicense->show_notification();

register_activation_hook( __FILE__, 'myplugin_activate_ECAE' );
function myplugin_activate_ECAE() {
	global $PluginLicense;

	$PluginLicense->reactivate_popup();
}
