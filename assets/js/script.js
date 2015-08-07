/**
 * Created by PhpStorm.
 * User: Ermin Islamagic
 * Web: http://islamagic.com/
 * Date: 8/7/2015
 * Time: 10:36 PM
 */
(function($){

    $(document).ready(function(){
        $('.collapse').collapse({
            toggle: false
        });

        $('#myTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    })

})(jQuery);