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
        });

        $("select[name='items_per_page']").change(function () {
            $(this).closest('form').trigger('submit');
        });

        // toggle compare button
        $('[name="compare"]').change(function(i,e){
            var isChecked = false;
            $('[name="compare"]').each(function(ind,ele){
                if($(ele).is(':checked')){
                    isChecked = true;
                }
            });

            if(isChecked){
                $('[data-compare="toggle"]').removeClass('sr-only');
            }else{
                $('[data-compare="toggle"]').addClass('sr-only');
            }
        });

        $('[data-compare="toggle"]').click(function(){

            var items = [];

            $('[name="compare"]').each(function(ind,ele){
                if($(ele).is(':checked')){
                    items.push($(ele).data('id'));
                }
            });
            alert(items);

        });

        $("#organisation").getOrgChart({
            theme: "cop",
            //theme: "annabel",
            //theme: "belinda",
            //theme: "cassandra",
            //theme: "deborah",
            //theme: "lena",
            //theme: "monica",
            //theme: "eve",
            //theme: "vivian",
            //theme: "helen",
            printable: true,
            editable: false,
            primaryColumns: ["Title","Name"],
            imageColumn: "Image",
            dataSource: [
                { id: 1, parentId: null, Title: "CEO", Name: "Lorem Ipsum", Document: "https://docs.google.com/document/d/1W3b3UxMeZReWf8Pucpaq07K-jI_qlNyhFfni3megXKg", class: "one"},
                { id: 2, parentId: 1, Title: "Managing Director", Name: "Lorem Ipsum", Document: "https://docs.google.com/document/d/1t0JEzYbIhsjznTX6MvW2NWhMHBZngjfvBYa0XkjZm9U", class: "one"},
                { id: 3, parentId: 2, Title: "CFO", Name: "Lorem Ipsum", Document: "https://docs.google.com/document/d/1SmVAm0L_CytxK5N9rQz43iHK4TRcmcHxsaoIenCUnxw", class: "one"},
                { id: 4, parentId: 3, Title: "Account Director", Name: "Lorem Ipsum", Document: "https://docs.google.com/document/d/1FyAXmWDXEDrw5R15GUCiTmnaWz_R1dE2ptz7BmeMdPY", class: "one"},
                { id: 5, parentId: 3, Title: "Business Development Manager", Name: "Lorem Ipsum", Document: "https://docs.google.com/document/d/1CeZUW_UrSgZrvdFWpTH-jHmt4CgvsGfNzbHnBfmWhwc", class: "one"},
                { id: 6, parentId: 3, Title: "New projects account manager (b)", Name: "Lorem Ipsum", Document: "https://docs.google.com/a/creativeoutsourcing.nl/document/d/1uzeOdbFf_NMsNnS6IPT1pUHQfTUYesha07mQowz9fqY"},
                { id: 7, parentId: 3, Title: "WS Account manager(a)", Name: "Lorem Ipsum", Document: ""},
                { id: 8, parentId: 3, Title: "CO account manager(c)", Name: "Lorem Ipsum", Document: ""},

                { id: 9, parentId: 2, Title: "Assistant of Director", Name: "Lorem Ipsum", Document: "https://docs.google.com/document/d/1jlbKb1N2AGXoWsVItCOcfLl5YEdKgcXamfsAEGINSfk", class: "two"},

                { id: 10, parentId: 6, Title: "Creative Director", Name: "Lorem Ipsum", Document: ""},
                { id: 11, parentId: 6, Title: "Designer", Name: "Lorem Ipsum", Document: ""},
                { id: 12, parentId: 6, Title: "WEB Developer", Name: "Lorem Ipsum", Document: ""},

                { id: 13, parentId: 7, Title: "Account assistant", Name: "Lorem Ipsum", Document: "", class: "two"},
                { id: 13, parentId: 7, Title: "Account executive", Name: "Lorem Ipsum", Document: "", class: "two"},

                { id: 13, parentId: 7, Title: "Graphic Designer", Name: "Lorem Ipsum", Document: ""},
                { id: 14, parentId: 7, Title: "Graphic Designer", Name: "Lorem Ipsum", Document: ""},
                { id: 15, parentId: 7, Title: "UX designer", Name: "Lorem Ipsum", Document: ""},
                { id: 16, parentId: 7, Title: "Web developer", Name: "Lorem Ipsum", Document: ""},

                { id: 17, parentId: 8, Title: "CO lab account executive", Name: "Lorem Ipsum", Document: "", class: "two"},
                { id: 18, parentId: 8, Title: "Senior designer", Name: "Lorem Ipsum", Document: ""},
                { id: 19, parentId: 8, Title: "Developer", Name: "Lorem Ipsum", Document: ""},
            ],
            clickEvent: function( sender, args ) {
                if(args.data.Document != "undefined" && args.data.Document !== ""){
                    window.open(args.data.Document);
                }
                return false; // Cancel the event
            },
            updateEvent: function( sender, args ) {
                console.log("updateEvent")
                console.log(sender)
                console.log(args)

                /*
                * @todo update database and refresh page on update
                * */
            },
            removeEvent: function( sender, args ) {
                console.log("removeEvent")
                console.log(sender)
                console.log(args)
            } ,
        });


    })

})(jQuery);