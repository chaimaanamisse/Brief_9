<?php
if (!defined('ABSPATH')) {
  exit;
} 
global $face;
global $insta;
global $twitter;


global $copyright;
global $variable6;

if (isset($_POST['input_submit'])) {
  social_media_opt();
}
if(isset($_POST['copyright_submit'])){
  quote_function();
}
function quote_function(){
  $copyright_text = $_POST['copyright_text'];

  global $copyright;
  

  if (get_option('copyright_text') != trim($copyright_text)) {
    $copyright = update_option('copyright_text', trim($copyright_text));
  }
  
}
function social_media_opt()
{
  $lien1 = $_POST['lien_face'];
  $lien2 = $_POST['lien_insta'];
  $lien3 = $_POST['lien_twitter'];

  global $face;
  global $insta;
  global $twitter;
  

  if (get_option('lien_face') != trim($lien1)) {
    $face = update_option('lien_face', trim($lien1));
  }
  if (get_option('lien_insta') != trim($lien2)) {
    $insta = update_option('lien_insta', trim($lien2));
  }
  if (get_option('lien_twitter') != trim($lien3)) {
    $twitter = update_option('lien_twitter', trim($lien3));
  }

}
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  
  <?php if (isset($_POST['input_submit']) && ($face || $insta || $twitter)) : ?>  
    <div id="message" class="updated below-h2">
      <p>vos changements sont enregistrés avec succès </p>
    </div>
  <?php endif; ?>
 
  <div class="metabox-holder">
    <div class="postbox">
      
      
      <form method="post" action="">
        <table class="form-table">

            <tr>
              <th scope="row" style="padding-left: 12px;">Le lien de facebook :</th>
              <td><input type="text" name="facebook_link" value="<?php echo get_option('lien_face'); ?>" style="width:350px;" /></td>
            </tr>

            <tr>
              <th scope="row" style="padding-left: 12px;">Le lien d'instagram :</th>
              <td><input type="text" name="instagram_link" value="<?php echo get_option('lien_insta'); ?>" style="width:350px;" /></td>
            </tr>

            <tr>
              <th scope="row" style="padding-left: 12px;">Le lien de twitter :</th>
              <td><input type="text" name="twitter_link" value="<?php echo get_option('lien_twitter'); ?>" style="width:350px;" /></td>
            </tr>

          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
              <input type="submit" name="input_submit" value="Enregister les changements" class="button-primary" />
            </td>
          </tr>
        </table>
      </form>
    </div>

   

  </div>
</div>