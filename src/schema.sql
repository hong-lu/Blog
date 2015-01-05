-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2015 at 12:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
`cid` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`uid`, `pid`, `cid`, `content`, `date`) VALUES
(63, 67, 23, 'Greece could exit the Euro, re-adopt the Drachma at parity to the Euro, and convert all its debt obligations to Drachma "by newly enacted Laws" and then repay all its debts in "Novo-Drachma". When the markets drive the Drachma down to 100 to the Euro, the debts will simply vanish with 240b becoming just 2.4b, a very manageable figure even for Greece. Tsipras can then declare "victory" as he would have fulfilled his single pledge to his constituents who will then have to bear the brunt of "Argentinization" of the Greek economy.', '2015-01-05 10:24:59'),
(63, 68, 24, 'I''m looking forward to my hoverboard and flying car.', '2015-01-05 11:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`post_id` bigint(20) unsigned NOT NULL,
  `heading` text NOT NULL,
  `abstract` text NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_name` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `heading`, `abstract`, `content`, `date`, `user_name`, `uid`) VALUES
(66, 'Calmer Seas Aid Searchers in AirAsia Recovery', '<p>Search and recovery teams took advantage of calmer seas Monday to expand the hunt for wreckage and victims of a passenger jet that crashed into the Java Sea on December 28.</p>', '<p><img src="http://gdb.voanews.com/422056C9-E954-4142-8829-3E9EC97D95F3_cx0_cy10_cw0_mw1024_s_n_r1.jpg" alt="" width="1024" height="576" />As the search efforts entered a ninth day, recovery teams took advantage of calmer seas to expand the hunt for wreckage and victims of Flight 8501, which went down with 162 people on board.</p>\r\n<p>&ldquo;At Iskandar Airport this morning, January 5, the weather is quite conducive. The visibility is six kilometers, there''s no low cloud, the wind is calm and all the supporting items for flying are in a serviceable condition. In the sea area earlier we received a report from the BMKG (Indonesian Meteorology, Climatology and Geophysics Agency) that waves were still around 1.5 to 2.5 meters and the currents are between 2 and 5 knots,&rdquo; said the Air Force Search and Rescue Coordinator, Lt. Johnson Supriadi.</p>\r\n<p>Bad weather for the last week had hampered search and recovery efforts.</p>\r\n<p>The Airbus A320 crashed en route from Indonesia to Singapore during a storm, though no official cause has been determined.</p>\r\n<p>Murky waters forced divers to turn back Sunday, after nearing what officials suspect is the main debris field of five large pieces of the aircraft.</p>\r\n<p>&ldquo;They made the dive but in the sea-bed the visibility was zero which means complete darkness, with muddy sea-bed. Also the current wind is about three to five knots. With this kind of condition, the diving effort is temporary suspended by the coordinator, they will try to use ROVs (Remotely Operated Underwater Vehicle) instead,&rdquo; said Bambang Soelistyo, head of the National Search and Rescue Agency.</p>\r\n<p>Recovery teams hope to reach what they believe is the plane&rsquo;s fuselage to retrieve bodies and the aircraft''s flight data recorders - the "black boxes" - located in the tail section of the aircraft.</p>\r\n<p>An official from Indonesia''s National Search and Rescue Agency said Sunday the fuselage is believed to have broken into several parts, separating the tail from the rest of the aircraft.</p>\r\n<p>"Based on the findings we can say that the plane''s body cracked or broke away or separated from its tail, from the side. There is still no confirmation on the exact location. The body was separated from the tail and the black box was located in the area of the plane''s tail," said the official.</p>\r\n<p>Three more bodies were recovered Monday. Nine of the 37 bodies found have been identified.</p>\r\n<p>Indonesia''s weather bureau said weather conditions were a factor in causing the plane to plunge into the Java Sea. The findings posted on the agency''s website reference several other flights that experienced problems like engine failure and severe turbulence during storms in the area in the last decade.</p>\r\n<p>Before takeoff and during the last moments of the flight, the pilots requested to fly at a higher altitude to avoid a storm. The request was not approved because other planes were in the area.</p>\r\n<p>The twin-engine jet disappeared from radar without a distress call nearly halfway into what was supposed to be a two-hour flight from Surabaya to Singapore.</p>\r\n<p>Indonesian officials have revealed that the AirAsia flight that crashed into the Java Sea on 28 December was not licensed to fly the route on that day.</p>\r\n<p>The Ministry of Transport said Monday that the airline was approved to fly the route from the city of Surabaya to Singapore on Mondays, Tuesdays Wednesdays and Saturdays, but took off on a Sunday. The Ministry has suspended AirAsia flights on the route and will conduct a full investigation, separate from the crash investigation.&nbsp; The Ministry said it will also inspect the route licenses of other airlines.</p>\r\n<p>&ldquo;I do not want to comment on whether the license had anything to do with the crash. We will wait for the results from KNKT (National Committee for Safety Transportation). Please differentiate between the probe into flight licenses and the air crash investigation. They are two different things,&rdquo; said Djoko Murjatmodjo, acting director general of air transportation at Indonesia&rsquo;s Transport Ministry.</p>', '2015-01-05 09:33:28', '', 62),
(67, 'Samaras Warns of Euro Exit Risk as Greek Campaign Starts', '<p>Greece&rsquo;s political parties embarked on a flash campaign for elections in less than three weeks that Prime Minister Antonis Samaras said will determine the fate of the country&rsquo;s membership in the euro currency area.</p>', '<p>Samaras used a Jan. 2 speech to warn that victory for the main opposition Syriza party would cause default and Greece&rsquo;s exit from the 19-member euro region, while Syriza leader Alexis Tsipras said his party would end German-led austerity. Der Spiegel magazine reported <a href="http://topics.bloomberg.com/chancellor-angela-merkel/">Chancellor Angela Merkel</a> is ready to accept a Greek exit, a development Berlin sees as inevitable and manageable if Syriza wins, as polls suggest.</p>\r\n<p>The high-stakes run-up to the Jan. 25 vote returns Greece to the center of European policy makers&rsquo; attention as they strive to fend off a return of the debt crisis that wracked the region from late 2009, forcing international financial support for five EU countries. While Greek 10-year bond yields rose to about 9 percent last week from a post-crisis low of 5.57 percent in September, the relative improvement in yields from <a href="http://topics.bloomberg.com/italy/">Italy</a> to Ireland suggests that the contagion has been contained.</p>\r\n<p>&ldquo;Many European officials believe a Greek exit would be manageable, and in contrast to 2010-2011, we wouldn&rsquo;t see the same cascading effect on countries like Spain or Ireland,&rdquo; Fredrik Erixon, director of the European Centre for International Political Economy in Brussels, said by telephone.</p>\r\n<figure class="hide_caption image_focus inline toggle_caption"><a href="http://www.bloomberg.com/photo/german-chancellor-angela-merkel-/-iSMNoXfxcf6U.html" target="_blank" rel="#img_iSMNoXfxcf6U"><span class="photo"><img src="http://www.bloomberg.com/image/iIdHbEuWxNo0.jpg" alt="" /></span></a><figcaption>Photographer: Krisztian Bocsi/Bloomberg</figcaption>\r\n<div class="ext_caption caption_preview">\r\n<p>Accepting Greece&rsquo;s exit from the euro area would mark a reversal of German Chancellor...<a href="http://www.bloomberg.com/news/2015-01-03/germany-sees-greek-euro-exit-as-manageable-outcome-spiegel-says.html">Read More</a></p>\r\n</div>\r\n</figure>\r\n<p>The euro depreciated 0.4 percent to $1.1950 at 7:05 a.m. in London, after touching its weakest level since March 2006.</p>\r\n<p>Tsipras, in a speech on Jan. 3, vowed to restructure his nation&rsquo;s debt and end what he called the &ldquo;unreasonable and catastrophic&rdquo; austerity policies.</p>', '2015-01-05 10:24:23', '', 63),
(68, 'CES', '<p>Get ready to have your mind blown when the 2015 International<span style="color: #000000;"> <a id="ramplink_Consumer Electronics show_" style="color: #000000;" href="http://abcnews.go.com/topics/news/consumer-electronics-show.htm" target="_blank">Consumer Electronics show</a></span>kicks off in Las Vegas this week, showcasing new gadgets and tech trends.</p>\r\n<p>The official event gets underway on Tuesday in Las Vegas, where approximately <span style="color: #000000;"><a style="color: #000000;" href="http://ces15.mapyourshow.com/6_0/exhibitor/exhibitor-list.cfm?export=pdf" target="_blank">3,500 companies</a></span> are expected to show off technology and services that not only impress but promise to make life easier.</p>\r\n<p>Patrick Moorhead, principal technology analyst at Moor Insights and Strategy, told ABC News he expects the driving trend this year will be "connected everything."</p>\r\n<p>"I don''t think we''ll see too many new classifications of products but a whole lot more connected items at different price points," he said.</p>\r\n<p>Here''s a look at some of the key categories to watch for at CES:</p>', '<p><strong>Cheaper Televisions</strong></p>\r\n<p>It may be time to say goodbye to your old 1080 pixel television.</p>\r\n<p>Expect to get more bang for your buck when purchasing a 4K television. (That''s a TV that stretches 4,000 pixels wide, giving you an incredible resolution.)</p>\r\n<p>While the technology has been around for a few years, Moorhead said this is the year when it''s going to become even more affordable to consumers.</p>\r\n<p>&nbsp;</p>\r\n<div id="e_image_27966178" class="e_image e_full">\r\n<div class="e_img_e_full"><img src="http://a.abcnews.com/images/Technology/gty_self_driving_car_lb_150102_4x3_992.jpg" alt="PHOTO: Googles Lexus RX 450H Self Driving Car is seen parked on Pennsylvania Ave. in Washington, April 23, 2014." width="640" height="480" border="0" />\r\n<div class="embed_credit">Getty Images</div>\r\n</div>\r\n<div class="embed_caption_e_full">PHOTO: Googles Lexus RX 450H Self Driving Car is seen parked on Pennsylvania Ave. in Washington, April 23, 2014.</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><strong>Connected Cars</strong> With a number of auto makers at CES this year, including Audi, BMW, <a id="ramplink_Chrysler_" href="http://abcnews.go.com/topics/business/automotive/chrysler.htm" target="_blank">Chrysler</a>, Ford, <a id="ramplink_GM_" href="http://abcnews.go.com/topics/business/automotive/general-motors.htm" target="_blank">GM</a>, <a id="ramplink_Mercedes_" href="http://abcnews.go.com/topics/business/automotive/mercedes-benz.htm" target="_blank">Mercedes</a>, Toyota and <a id="ramplink_Volvo_" href="http://abcnews.go.com/topics/business/automotive/volvo.htm" target="_blank">Volvo</a>, the connected car is expected to take center stage.</p>\r\n<p>"You''re going to see car technologies that are ready but you''re also going to get insights into autonomous driving cars," Moorhead said.</p>\r\n<p>While we''ve already gotten a glimpse of the vehicle of the future, Moorhead said we should expect to learn more about how the self-driving cars that are so smart they know how to obey speed limit signs operate.</p>\r\n<p><strong>Connected Home</strong></p>\r\n<p>"On the home innovation side, you''re going to see a whole lot of things that are connected," Moorhead said. "Door locks, HVAC systems, garage door openers, security systems, a lot more."</p>\r\n<p>Among the products being featured is the <a href="http://ces15.mapyourshow.com/6_0/exhibitor/exhibitor-details.cfm?ExhID=T0010334&amp;ShowResultsFeature=true" target="_blank">Eve</a> Room from Elgato, which gathers data on air quality, temperature, humidity, air pressure, energy and water consumption in your home.</p>\r\n<p><strong>Energy Management</strong></p>\r\n<p>Future appliances may be more eco-friendly and save you money on your electric bill.</p>\r\n<p>Moorhead says to watch out for appliances, such as refrigerators and thermostats, that have the "ability to more intelligently manage the energy you have and visualize it for you."</p>\r\n<p>&nbsp;</p>\r\n<div id="e_image_27966081" class="e_image e_full">\r\n<div class="e_img_e_full"><img src="http://a.abcnews.com/images/Technology/gty_smart_appliance_lb_150102_4x3_992.jpg" alt="PHOTO: Visitors look at the latest generation of smart technology washing machines at the Panasonic stand at the 2014 IFA home electronics and appliances trade fair in Berlin, Sept. 5, 2014." width="640" height="480" border="0" />\r\n<div class="embed_credit">Getty Images</div>\r\n</div>\r\n<div class="embed_caption_e_full">PHOTO: Visitors look at the latest generation of smart technology washing machines at the Panasonic stand at the 2014 IFA home electronics and appliances trade fair in Berlin, Sept. 5, 2014.</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><strong>Wearables</strong></p>\r\n<p>The Apple Watch, due out early this year, is already dominating the conversation for 2015, but the tech giant won''t be participating at CES. Expect to see hundreds of other companies showing off their wearables, including some accessories that are designed to work with the Apple Watch.</p>\r\n<p><strong>Virtual Reality</strong></p>\r\n<p>While there''s no release date yet for the consumer version of the Oculus virtual reality headset, plenty of chatter has centered around 2015 being the year of virtual reality for the masses.</p>\r\n<p>At the Web Summit in November, CEO Brendan Iribe said a consumer release is "months, not years away, but many months."</p>', '2015-01-05 11:47:23', '', 62);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`uid` bigint(20) unsigned NOT NULL,
  `gender` varchar(40) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `pf_name` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `intro` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `gender`, `user_name`, `password`, `email`, `pf_name`, `age`, `address`, `intro`, `img`) VALUES
(62, 'F', 'Hong Lu', '47806f6a59544b61670d98e8d4ebe682', 'hlmontgomory@gmail.com', 'Lulu', 18, ' Singapore, Kent Ridge', ' This is the sample user''s blog', ''),
(63, 'M', 'TTT', '47806f6a59544b61670d98e8d4ebe682', 'ttt@hotmail.com', 'TTT', 0, '', '', 'girl.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`), ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `uid` (`uid`), ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `uid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
