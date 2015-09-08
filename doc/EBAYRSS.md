# eBay RSS Feed
The site exposes an eBay RSS feed for Lupin related auctions at `/rss/ebay`. It uses the
[findItemsAdvanced](http://developer.ebay.com/Devzone/finding/CallRef/findItemsAdvanced.html) API call to bring in as
many results as possible while weeding out undesirable items (e.g., lupin flower seeds, paintings of lupin flowers,
etc.).

## Configuration
You can configure how the API works via the `/application/config.json` file. Here is a sample configuration followed by
a list of the configuration options with notes on their use:

```
{
  "ebay": {
    "url": "http://svcs.ebay.com/services/search/FindingService/v1?OPERATION-NAME=findItemsAdvanced&SERVICE-VERSION=1.0.0&SECURITY-APPNAME=__APIKEY__&RESPONSE-DATA-FORMAT=JSON&REST-PAYLOAD=true&keywords=__KEYWORDS__&sortOrder=StartTimeNewest&itemFilter(0).name=ExcludeCategory&__EXCLUDECATEGORIES__",

    "apiKey": "<your API key here>",

    "keywords": [
      "lupin",
      "-lupine",
      "-%22harry+potter%22",
      "-%22lego+potter%22",
      "-Thewlis",
      "-%22professor+lupin%22",
      "-%22Lupin+Flowers%22"
    ],

    "categories": {
      "exclude": [
        "208",
        "3632",
        "4233",
        ...
      ]
    }
  }
}
```

| Name                 | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
|----------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `url`                | You should not need to modify this. If you do, you will need to update,the `/route/rss.php` file, especially if you alter any of the,`__KEYNAME__` (e.g., `__APIKEY__`) portions of the value.                                                                                                                                                                                                                                                                                                    |
| `apiKey`             | Your eBay developer API key                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| `keywords`           | The list of keywords to use to find items; this can be a mix of,inclusive and exclusive keywords. For example, the entries `lupin` and,`-%22professor+lupin%22` will find any items containing the word "lupin",but not matching the string "Professor Lupin". The `%22` is the URL,escape character for a double quote; the `+` is the URL escape character,for a space character. You can enter as many keyword entries you like,as long as the total string built is less than 350 characters. |
| `categories\exclude` | A list of eBay category IDs to exclude entirely from the results.                                                                                                                                                                                                                                                                                                                                                                                                                                 |