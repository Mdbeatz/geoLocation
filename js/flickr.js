/**
 * Function retrieves images from Flickr API based
 * @param pos
 */
function getFlickrImages(pos) {
    var src;
    var url = "https://api.flickr.com/services/rest/?method=flickr.photos.search" +
        "&api_key=7522e15214380266f205c98f9c2323e9" +
        "&lat=" + pos['lat'] +
        "&lon=" + pos['lng'] +
        "&format=json&jsoncallback=?";

    $.getJSON(url, function (data) {
        $.each(data.photos.photo, function (i, item) {
            src = "http://farm" + item.farm + ".static.flickr.com/" + item.server + "/" + item.id + "_" + item.secret + "_m.jpg";
            $("<img/>").attr("src", src).appendTo("#images");
            if (i == 15) return false;
        });
    });
}