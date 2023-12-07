<div class="ess-form">
    <p>
        <label for="ess-name"><?php esc_html_e( 'Name', 'e-sent' );?></label>
        <input type="text" id="ess-name">
    </p>
    <p>
        <label for="ess-email"><?php esc_html_e( 'Email', 'e-sent' )?></label>
        <input type="email" id="ess-email">
    </p>
    <p>
        <button type="button" id="ess-preview"><?php esc_html_e( 'Preview', 'e-sent' ); ?></button>
    </p>
    <p style="color:red" id="ess-message"></p>
</div>

<div class="ess-preview">
    <h2><?php esc_html_e( 'Preview Your Submitted Value' ); ?></h2>
    <p><?php esc_attr_e( 'Name: ', 'e-sent' ); ?> <strong class="esc_preview_name"></strong></p>
    <p><?php esc_attr_e( 'Email: ', 'e-sent' ); ?> <strong class="esc_preview_email"></strong></p>
    <p>
        <button type="button" id="ess_preview"><?php esc_html_e( 'Back', 'e-sent' )?></button>
        <button type="button" id="ess_submit"><?php esc_html_e( 'Submit', 'e-sent' )?></button>
    </p>
</div>

<p style="text-align: center; color:green;" class="ess-success"></p>