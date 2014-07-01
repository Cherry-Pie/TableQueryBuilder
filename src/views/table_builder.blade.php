<div id="{{ $def['options']['ident'] }}" class="widget-box table-builder dataTables_wrapper">
    <div class="widget-title">
        <span class="icon">
            <i class="glyphicon glyphicon-th"></i>
        </span>
        <h5>{{ $def['options']['caption'] }}</h5>
    </div>

        @include('tb::form')
        @include('tb::table')
        
        @include('tb::ui_overlay')

        <iframe id="submiter" name="submiter" style="display:none;"></iframe>                    
    </div>



</div>

<script type="text/javascript">
jQuery(document).ready(function() {
    TableBuilder.init({
        ident: '{{ $def['options']['ident'] }}',
        table_ident: '{{ $def['options']['table_ident'] }}',
        form_ident: '{{ $def['options']['form_ident'] }}',
        action_url: '{{ $def['options']['action_url'] }}',
        onSearchResponse: function() {
            Dashboard.initTooltips();
        },
    });
});
</script>