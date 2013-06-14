
jQuery(document).ready(function($){
    var settings = _.chain(wp_bootstrap_config_settings).values().map(function(val){ return _.values(val); }).flatten();
    $('#wp-config-settings input[type="text"]').each(function(idx, elem){
        var $el = $(elem);
        var itemName = /^settings\[([^\]]+)]$/.exec($el.attr('name'));
        itemName = itemName[1];
        var item = settings.filter(function(itm){ return itm.name === itemName; }).value()[0];
        $(elem).typeahead({
            source: function(query, process){
                var result = settings.filter(function(itm){
                    return itm.type === item.type
                            && itm.order < item.order
                            && itm.name.indexOf(query) >= 0
                }).pluck('name').value();
                return result;
            }
        });
    });
    
    $('[data-toggle="tooltip"]').tooltip({html: false, container: 'body'});
});

(function($){
    $(document).on('shown', '.collapse', function(evt, ui){
       var tgt = $(evt.target);
       if(!tgt.is('.collapse')){return;}
       var slug = tgt.attr('id').replace(' ', '-').toLowerCase();
       var toggles = $('a[data-toggle="collapse"][href="#' + slug + '"]');
       toggles.addClass('in');
    });
    $(document).on('hidden', '.collapse', function(evt, ui){
       var tgt = $(evt.target);
       if(!tgt.is('.collapse')){return;}
       var slug = tgt.attr('id').replace(' ', '-').toLowerCase();
       var toggles = $('a[data-toggle="collapse"][href="#' + slug + '"]');
       toggles.removeClass('in');
    });
}(jQuery));