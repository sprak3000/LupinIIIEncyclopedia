# CHANGELOG

## 3.7.0 - 2023 July 27
### Enhancements:
- Update to latest version of ANN API client.

## 3.6.0 - 2022 October 28
### Enhancements:
- Issue #60: Upgrade to Slim3

## 3.5.0 - 2020 October 25
### Enhancements
- Issue #66: Expand fifth TV series details
- Issue #75: Go through and validate Hulu, other streaming links  
- Issue #74: Update Detective Conan film
- Issue #69: Expand 2014 live action film
- Issue #68: Expand Goemon Spray of Blood film
 
## 3.4.5 - 2020 January 01
### Bug Fixes
- Issue #63:  eBay results down and need to get onto https URL

## 3.4.4 - 2019 January 07
### Bug Fixes
- Issue #61: Fixing PHP Warning in logs after upgrading to PHP 7.2

## 3.4.3 - 2018 November 11
### Bug Fixes
- Issue #58: Fixing issue with Twitter timeline on homepage

## 3.4.2 - 2018 January 30
### Bug Fixes
- Issue #56: Fixing another page throwing HTTP 500 error

## 3.4.1 - 2018 January 30
### Bug Fixes
- Issue #54: Fixing pages that were throwing HTTP 500 errors.

## 3.4.0 - 2018 January 19
### Enhancements
- Adding Anime News Network data and teaser video to fifth TV series.

## 3.3.0 - 2018 January 16
### Enhancements
- Issue #51: Add skeleton page for the fifth TV series data. Will be filled in as more information becomes available.
 
## 3.2.0 - 2017 October 12
### Enhancements
- Issue #47: Updating how the cast and staff data is rendered. Now uses CSS grid for layout. Updates `Util::GetAnimeData()`
to convert the staff data to a structure suited for displaying one "role" (e.g., artist) with multiple people listed for it.

## 3.1.0 - 2017 October 06
### Enhancements
- Issue #48: Use a sub-template for displaying the media on anime pages.

## 3.0.0 - 2017 October 06
### Enhancements
- Upgraded to the latest version of the AnimeNewsNetworkAPI library. This requires the site be installed on PHP7.
- Issue #4: Updated anime pages to pull cast and staff data from the Anime News Network API.
- Updating view system to allow for sub-templates.

### Bug Fixes
- Fixing menu issue where OVA page would also have the "Inspector Zenigata" menu item highlighted.

## 2.7.0 - 2017 January 11
### Enhancements
- Added "Lupin the Box" images to site.

## 2.6.1 - 2017 January 04
### Bug Fixes
- Fixing PHP warning on 404 page seen after upgrading to PHP7

## 2.6.0 - 2016 October 24
### Enhancements
- Added details about upcoming Zenigata live-action TV series

## 2.5.0 - 2016 October 24
### Enhancements
- Added details about upcoming Goemon film

## 2.4.2 - 2016 October 05
### Bug Fixes
- Addressing "email leak" on Kent State ML page found by security scan

## 2.4.1 - 2016 August 12
### Bug Fixes
- Issue #38: Fixed "Woman Called Mine Fujiko TV Series" page

## 2.4.0 - 2016 June 02
### Enhancements
- Updated fourth series page to include episodes

## 2.3.0 - 2016 May 26
### Enhancements
- Added images to the Tokyo International Anime Fair page
- Updated site logo and header style

## 2.2.0 - 2016 May 26
### Enhancements
- Added cameos gallery

## 2.1.0 - 2016 May 24
### Enhancements
- Added cosplay gallery

## 2.0.1 - 2016 May 24
### Bug Fixes
- Sort the gallery images based on file name to maintain the order defined by the file naming convention.

## 2.0.0 - 2016 May 24
### Enhancements
- Updated to version 1.8 of the Unify theme I use. This alters the CSS / JS file structure I use along with HTML updates.
  Hence, bumping up the major version number to indicate breaking backwards compatibility.
- Started removing the Content Timeline JS plugin in favor of using the new non-JS based Unify based timeline display.

## 1.10.0 - 2015 September 07
### Enhancements
- Refined eBay query to filter out various items that crept back in after last rewrite of query
- Rework how eBay configuration is defined
- Document how eBay RSS configuration works

## 1.9.0 - 2015 July 04
### Enhancements
- Added image gallery for Alcatraz Connection
- Refined eBay query reducing the amount of excluded categories in the config; will continue to monitor and adjust as needed
- Added linked icons to eBay and forums RSS feeds for those that want to follow along off of the site

### Bug Fixes
- Fixed an issue where an eBay item without an image broke the RSS feed

## 1.8.1 - 2015 June 28
### Bug Fixes
- Adding additional eBay category exclusions

## 1.8.0 - 2015 June 20
### Enhancements
- Moved over the CD data I had from the previous iteration of the site; soundtracks specific to an anime are found on
  that anime's page. Everything else is under the "Random Loot" nav.
- Added a PDF of an interview with Monkey Punch to his profile page.
- Adjusted color and layout of video game info boxes

### Bug Fixes
- Fixed a spacing issue with the text of one nav item

## 1.7.0 - 2015 June 14
### Enhancements
- Created eBay RSS feed for others to use; converted eBay listings on home route to use it
- Altered custom view renderer to not use the layout files if the template starts with `view/rss`

## 1.6.0 - 2015 June 10
### Enhancements
- Issue #23: Move RSS feed fetching out of "home" view template
- Issue #24: Change how eBay RSS feed works

### Bug Fixes
- Issue #25: CodeClimate bug risk reports

## 1.5.0 - 2015 May 26
### Enhancements
- Updating information and images for fourth TV series

## 1.4.3 - 2015 May 21
### Bug Fixes
- Issue #20: Redirects result in application error

## 1.4.2 - 2015 May 21
### Bug Fixes
- Issue #18: Redirects for old pages
- Did not check in fourth TV series image previously

## 1.4.1 - 2015 Apr 26
### Bug Fixes
- Issue #15: Missing GTM for analytics

## 1.4.0 - 2015 Apr 25
### Enhancements
- Google Sitemaps XML file

## 1.3.0 - 2015 Apr 24
### Bug Fixes
- Typo in doc block comment on my page view class

### Enhancements
- Issue #5: Awesome 404 page styling

## 1.2.2 - 2015 Apr 24
### Bug Fixes
- Issue #11: Anime sub-nav link no longer a link

## 1.2.1 - 2015 Apr 24
### Bug Fixes
- Issue #9: Fixing third series missing links

## 1.2.0 - 2015 Apr 24
### Enhancements
- Issue #6: Add Hulu links for Conan and Jigen films

## 1.1.1 - 2015 Apr 24
### Bug Fixes
- Issue #2: Fix homepage video to be responsive design

## 1.1.0 - 2015 Apr 24
### Enhancements
- Issue #3: Added Blue Jacket series information

## 1.0.0 - 2015 Apr 23
Initial open source release of the Lupin III Encyclopedia web site
