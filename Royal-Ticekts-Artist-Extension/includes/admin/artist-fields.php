<?php

function r_artist_add_form_fields(){
?>
<div class="form-field" >
	<label><?php _e( 'More info URL', 'recipe2' ) ?></label>
	<input type="text" name="r_more_info_url">
	<p class="description" >
		<?php 
       esc_html_e( 'A url a user can click to learn more about the artist', 'recipe2' );
		 ?>
	</p>
</div>
<?php
}

function r_artist_edit_form_fields( $term ){
//  $url   = get_term_meta( $term->term_id, 'more_info_url', true );
  ?>
<tr class="form-field" >
	<th scope="row" valign="top" >
		<label>
			<?php esc_html_e( 'More info Url', 'recipe2' ) ?>
		</label>
	</th>
	<td>
		<input type="text" name="r_more_info_url" value="<?php //esc_attr( $url );  ?>" >
		<p class="description" >
			<?php
           esc_html_e('A url a user can click to learn more about the artist', 'recipe2'  );
			?>
		</p>
	</td>
</tr>
  <?php
}