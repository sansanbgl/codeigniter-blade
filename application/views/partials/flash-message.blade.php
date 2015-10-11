<?php 
    $flash_style = Session::get('flash_style');
    $flash_icon = Session::get('flash_icon');
    $flash_title = Session::get('flash_title');
    $flash_message = Session::get('flash_message');
 ?>

<div class="callout callout-{{ $flash_style or 'info' }}" style="margin-bottom: 0!important;">                                                
<h4><i class="{{ $flash_icon or 'fa fa-info' }}"></i> {{ $flash_title or 'Pemberitahuan' }}
</h4>
{{ $flash_message or null }}
</div>

<br>