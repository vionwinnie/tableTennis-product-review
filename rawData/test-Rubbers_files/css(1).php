@charset "UTF-8";
/* CSS Document */
/* TOOLS MENU */
/* convert to stylevars pls */

.toolsmenu {
	background: #e9e9e9 url(images/Styles/Blackend/gradients/navbar_bg.png) repeat-x  center;
	width: 100%;
	display: block;
	border: 1px solid rgb(67, 67, 67);
	float: left;
	clear: both;
	margin: 0.5em 0;
}

.toolsmenu div {
	text-align: right;
	color: rgb(255, 153, 0);
	width: 100%;
	clear: both;
	float: left;
}

.toolsmenu h1 {
	font-size:14px;
	font-weight:bold;
	margin-top: 0.25em;
	text-align: left;
	display: inline;
	float: left;
	margin-left: 10px;
}

.toolsmenu h1 a {
	color: rgb(255, 153, 0);
}

.toolsmenu ul {
	padding: 5px 0;
	float: right;
	margin-right: 10px;
}

.toolsmenu .nopopupgroup li {
	float: left;
	margin-left: 10px;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .nopopupgroup li a {
	font-size: 11px;
	color: rgb(255, 153, 0);
	display:block;
	_display:inline;
	float: left;
	clear: right;
	padding: 0.2em 0.4em;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
	color: rgb(255, 153, 0);
	padding-right: 15px;
}

.toolsmenu li {
	position: relative;
	display:block;
	clear: right;
}

.toolsmenu .popupgroup ul {
	text-align: left;
	float: left;
}

.toolsmenu .popupgroup .popupbody {
	padding:2px;
}

.toolsmenu .menuimage, .toolsmenu li a.menuimage {
	padding-left: 20px;
	color: rgb(255, 153, 0);
}

.toolsmenu .nopopupgroup li a, .toolsmenu .menuimage a.popupctrl {
	color: rgb(255, 153, 0);
        font-weight: bold;
}

.toolsmenu .nopopupgroup li a:hover, .toolsmenu .menuimage a.popupctrl:hover {
	color: rgb(255, 153, 0);
}

.menusearch.popupmenu .popupbody {
	min-width:240px;
	max-width:240px;
	font-size: 11px;
	left: -100px;
}

.menusearch input.button {
	float: right;
	top: 0;
}

.menusearch .submitoptions {
	width: 50%;
	float: left;
	text-align: left;
	clear: right;
}

.menusearch .formsubmit .advancedsearchlink {
	width: 50%;
	float: left;
	clear: right;
}

.toolsmenu .popupgroup .popupbody a, .toolsmenu .popupgroup .popupbody li label {
	font-size: 11px;
}

.toolsmenu .popupgroup .popupbody li {
	width: 100%;
}

.toolsmenu .popupgroup .popupbody form ul  {
	width: 100%;
}


/* CSS Document */

#forums {
	clear:both;
}

.forumhead {
	background: #363636 url(images/Styles/Blackend/gradients/forumhead_bg.png) repeat-x  ;
	_background-image: none;
	padding: 0;
	font:  bold 12px Arial, Tahoma,Calibri,Verdana,Geneva,sans-serif;
	color:rgb(186, 186, 186);
	clear:both;
	margin-top: 8px;
	float: left;
	border: 1px solid rgb(66, 66, 66);
	width: 100%;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
}

#forums .L1 .forumhead a {
	font:   bold 12px Arial, Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

#forums .L1 .forumhead .forumdescription {
	display:none;
}

#forums .L1 .L2 {
	display:block;
	clear: both;
}

#forums a.username {
	color: #ffffff;
}

#forums a.username:hover {
	color: rgb(255, 204, 0);
}

.forumbit_post .forumrow, .forumbit_nopost .forumhead, .forumbit_nopost .forumrow, .forumbit_post .forumhead, .forumbits .forumhead {

	-moz-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	-webkit-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	box-shadow: -2px 2px 2px rgb(46, 46, 46);

}

.forumbit_nopost .forumbit_nopost .forumrow, .forumbit_post .forumrow {
	color: rgb(130, 130, 130);
	background: rgb(39, 39, 39) url(images/Styles/Blackend/gradients/forumrow_bg.png) repeat-x  top;
	_background-image: none;
	display:block;
	width: 100%;
	float: left;
	min-height: 58px; /* 48px is the icon size */
	position:relative;
	border-bottom: 1px solid rgb(66, 66, 66);
	border-left: 1px solid rgb(66, 66, 66);
	border-right: 1px solid rgb(66, 66, 66);
}

.forumbit_nopost .forumbit_nopost .forumrow .forumicon {
	position: absolute;
	left: 10px;
	top: 5px;
}

.forumbit_nopost .forumbit_nopost .forumrow .forumdata {
	display: inline-block;
	width:100%;
}

.forumbit_nopost .forumbit_nopost .forumrow .forumdata .datacontainer {
	margin-left: 68px;
}

.forumbit_nopost .forumbit_post .forumrow .forumdata .datacontainer {
	margin-left: 0;
}

/* forumbit nopost */
.forumbit_post .foruminfo .forumdata {
	padding: 4px 0;
	font-size: 12px;
}

.forumbit_nopost .forumhead .forumtitle {
	font-size: 13px;
	min-width: 64%;
}

.forumbit_nopost .forumhead .forumtitle a {
	color: rgb(186, 186, 186);
	margin-left: 10px;
}

.forumbit_nopost .forumhead span, .forumbit_post .forumhead span {
	font-size: 12px;
}

.forumbit_nopost .forumhead span.forumlastpost, .forumbit_post .forumhead span.forumlastpost {
	width: 21%;
}

.forumbit_nopost .forumhead a.collapse img {
/* values are based on the image */
	position:absolute;
	top: -15px;
	right: -6px;
	display:block;
	width:13px;
	height:13px;
	overflow:hidden;
	float: right;
	clear: left;
}

.forumbit_nopost:hover .forumhead  a.collapsegadget {
	visibility:visible;
}

.forumbit_nopost .forumbit_nopost .forumrow .forumdata, .forumbit_post .forumrow .forumdata  {
	padding: 5px 10px;
	padding-left: 0;
	font-size: 11px;
}

/* Removed for VBIV-14010
.forumbit_nopost .forumbit_nopost .foruminfo .subforums {
	margin-left: 10px;
	position: relative;
	top: -10px;
}
*/

/* forumbit post */
.forumbit_post {
	float: left;
	position:relative;
	width: 100%;
	display:block;
}

.forumbit_post .forumhead span {
	padding: 0;
}

.forumbit_post .forumhead .forumlastpost {
	top: 0;
	margin-top: 0;
}

.forumbit_post .foruminfo, .forumbit_post .forumlastpost, .forumbit_post .forumactionlinks, .forumbit_post .forumstats, .forumbit_post .forumstats_2{
	padding: 5px 0;
}

.forumbit_post .forumhead .forumtitle {
	font-size: 13px;
	min-width: 64%;
}

.forumbit_post .forumhead .forumtitle span {
padding: 0;
padding-left: 10px;
}

.forumbit_post .foruminfo {
	width: 57%;
	min-width: 30%;
	float: left;
	clear: right;
	min-height: 48px; 
}

.forumbit_post .foruminfo .forumicon{
	position: absolute;
	left: 10px;
}

.forumbit_post .foruminfo .forumdata, .forumbit_post .foruminfo .forumtitle, .forumbit_post .foruminfo .viewing {
	float: left;
	clear: right;
}

.forumbit_post .foruminfo .viewing {
        white-space:nowrap;
}

.forumbit_post .foruminfo .forumdata {
	padding: 0;
	width: 100%;
	_width: 99%;
}

.forumbit_post .foruminfo .forumdata .datacontainer {
	float: left;
	width: 88%;
	padding-left: 68px;
}

.forumbit_post .foruminfo .forumdata .forumtitle, .forumbit_nopost .forumbit_nopost .forumrow .forumtitle {

font-size: 13px;
	margin-right: 10px;
}

.forumbit_post .foruminfo .forumdata .forumtitle a, .forumbit_nopost .forumbit_nopost .forumrow .forumtitle a {
	font-weight:bold;
}

.childsubforum .forumbit_post .foruminfo .forumdata .datacontainer .forumtitle a {
        padding-left:1.8em;
        background:url('images/Styles/Blackend/misc/child_forum.png') top left no-repeat;
}

.forumbit_post .foruminfo .forumdata .viewing {
	font-style: italic;
	margin-right:10px;
	margin-top: 3px;
	font-size: 11px;
}

.forumbit_post .forumactionlinks {
	width: 5%;
	display:block;
	float:left;
	clear:right;
}

.forumbit_post .forumactionlinks li {
	display: inline;
}

.forumbit_post .forumactionlink {
/* values based on icon size */
	display:block;
	width:18px;
	height:12px;
	overflow:hidden;
	float: right;
	clear: left;
	background:transparent none no-repeat;
	position: relative;
	margin: 3px 10px 0 0;
}

.forumactionlink a {
/* values based on icon size */
	display:block;
	padding-left:18px;
}

.forumactionlinks .rsslink {
	background-image:url(images/Styles/Blackend/misc/rss_40b.png);
}

.forumactionlinks .subslink {
	background-image:url(images/Styles/Blackend/misc/subscribed_40b.png);
}
.forumactionlinks .unsubslink {
	background-image:url(images/Styles/Blackend/misc/unsubscribed_40b.png);
}
.forumbit_post .forumdescription {
	display:block;
	clear:both;
	padding-right: 10px;
}

.forumbit_post .unsubscribe {
	display:block;
	right: 0;
	top: 2px;
}

.forumbit_post .forumstats, .forumbit_post .forumstats_2 {
	display: block;
	float: left;
	clear: right;
	width: 12%;
	margin-right: 2%;
}

.forumbit_post .forumstats li, .forumbit_post .forumstats_2 li{
	font-size: 12px;
	text-align: right;
	padding-right: 20px;
	display:block;
}


.forumbit_post .forumlastpost {
	display:block;
	float: left;
	clear: right;
}

.forumbit_post .forumrow .forumlastpost {
	width: 24%;
	font-size: 12px;
	padding-top: 5px;
}

.forumbit_post .forumlastpost .lastpostdate {
	font-size: 11px;
}

.lastpostlabel { 
	display: none; 
}

.forumlastpost .lastposttitle .postimg {
	vertical-align:middle;
	margin-top:-2px;
}

.forumlastpost p.lastposttitle {
	overflow: hidden;
}

.moderators, .subforums {
	display: block;
	clear:both;
}

.moderators h4, .subforums h4 {
	font-weight: bold;
	padding-right: 5px;
}

.moderators h4, .moderators .commalist, .subforums h4, .subforums .commalist {
	float:left;
	clear:right;
}

h2 span.forumthreadpost {
	width: 12%;
	text-align: center;
}


/* CSS Document */

.pagetitle {
	width:100%;
}

.threadlist {
	display:block;
	clear:both;
	width: 100%;
	margin-top: 5px;
	float: left;
}

.threadlist hr {
	display: none;
}

.threadlist .threads, .threadlist .stickies {
	display:block;
	clear:both;
}


.above_threadlist {
	display:block;
	clear:both;
	width: 100%;
	position: relative;
	float: left;
	margin-top: 10px;
	height: 32px;
}

.above_threadlist .newcontent_textcontrol {
	position: absolute;
	margin-bottom: 5px;
	left: 0;
}

.above_threadlist .threadpagenav {
	float: right;
	clear: left;
	position: absolute;
	right: 0;
	width: 50%;
	bottom: -10px;
}

.above_threadlist .threadpagenav .threadpagestats, .above_threadlist .threadpagenav .pagination {
	float: right;
	clear:left;
	vertical-align:middle;
	position: relative;
}

.above_threadlist .threadpagenav .threadpagestats {
	position: relative;
	font-size: 12px;
	color: rgb(204, 204, 204);
	top: 2px;
	margin-right: 10px;
	border:0;
}

.toolsmenu {
	margin-bottom: 0;
}



.forumfoot {
	display:block;
	width: 100%;
	clear:both;
	height: 2em;
	padding-top: 1em;
	position: relative;
}

.below_threadlist {
	display:block;
	position: relative;
	float: left;
	left: 0;
	margin-bottom: 5px;
	width: 100%;
	clear:both;
}

.noinlinemod.forumfoot {
	height: 0;
}

.below_threadlist .threadpagenav {
	width: 100%;
	float: right;
	margin-top: -10px;
	padding-bottom: 20px;
}

.below_threadlist .threadpagenav.nopagenav {
	padding-bottom: 50px;
}

.below_threadlist .threadpagenav .pagination {
	float: right;
	clear: left;
	position: relative;
	margin-top: 14px;
	margin-left: 10px;
}

.below_threadlist .newcontent_textcontrol {
	top: 0;
	position: absolute;
}

.navpopupmenu.popupmenu.nohovermenu {
	float: right;
	padding: 0;
	clear: left;
	margin-left: 10px;
	font-size: 12px;
	margin-top: 17.995px;
	margin-bottom: 10px;
}

* html .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	color: #424242;
	background: #e9e9e9;
	_background-image: none;
	border: 1px solid #a8a8a8;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding: 3.3333333333333px 6.6666666666667px;
}

.navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	color: #424242;
	background: #e9e9e9 url(images/gradients/generic_button.png) repeat-x top left;
	_background-image: none;
	border: 1px solid #a8a8a8;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding: 3.3333333333333px 6.6666666666667px;
}

.navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	position: relative;
	top: 0;
}

.navpopupmenu.popupmenu.nohovermenu a.popupctrl span.ctrlcontainer {
	background: transparent url(images/Styles/Blackend/misc/black_downward_arrow.png) no-repeat center left;
	padding-left: 15px;
}

* html .navpopupmenu.popupmenu.nohovermenu a.textcontrol:hover, .navpopupmenu.popupmenu.nohovermenu a.popupctrl:hover {
	color: #ffffff;
	background: #efefef;
	_background-image: none;
}

.navpopupmenu.popupmenu.nohovermenu a.textcontrol:hover, .navpopupmenu.popupmenu.nohovermenu a.popupctrl:hover {
	color: #ffffff;
	background: #efefef url(images/gradients/generic_button.png) repeat-x  ;
	_background-image: none;
}

.announcements {
	display:block;
	margin: 5px 0;
}

.announcements .announcerow {
	background: #8CD287 none   ;
	_background-image: none;
	margin-top: 5px;
	display:block;
	float: left;
	clear:both;
	width: 100%;

	-moz-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	-webkit-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	box-shadow: -2px 2px 2px rgb(46, 46, 46);

	padding: 5px 0;
}

.announcements .announcerow:first-child {
	margin-top: 0;
}

.announcerow .announceinfo, .announcerow .announcement {
	float:left;
	clear:right;
	display:block;
	background: #8CD287 none   ;
	_background-image: none;
}

.announcerow .announcement {
	width: 80%;
	text-align:left;
}

.announcerow .announceinfo {
	width: 20%;
	text-align:right;
}

.announcement dl {
	font-weight: bold;
	font-size: 13px;
	display:block;
}

.announcement dl dt, .announcement dl dd, .announceinfo dl dt, .announceinfo dl dd {
	display:inline;
}

.announcement .username, .announcement .usertitle, .announceinfo dl{
	font-size: ;
}

.announcement .username, .announcement dl {
	margin-left: 10px;
}

.announceinfo .date, .announceinfo dl {
	margin-right: 10px;
}

/* forumbits */

.forumbits {
	float: left;
	margin-bottom: 10px;
	width: 100%;
	clear:both;
}

.forumbits .forumhead h2 {
	padding: 5px 0;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	display:block;
	float: left;
	width: 100%;
	font-weight:bold;
	clear: both;
}

.forumbits .forumhead h2 span {
	display: block;
	float: left;
	clear: right;
}

.forumbits .forumhead h2 span.forumtitle {
	width: 64%;
	text-indent: 10px;
}

.forumbits .forumhead h2 span.forumlastpost {
	width: 20%;
}

.forumbits ol {
	float: left;
	width: 100%;
	clear:both;
}

.forumbits ol.commalist {
	width: auto;
	clear: none;
}

.forumbits .forumbit_nopost .forumhead {
	margin-top: 0;
	background: #363636 url(images/Styles/Blackend/gradients/forumhead_bg.png) repeat-x  ;
	_background-image: none;
	-moz-border-radius: 0;
	-webkit-border-radius: 0;
	border-radius: 0;
	border: 1px solid rgb(66, 66, 66);
	border-top: 0;
}

.forumbits .forumbit_nopost .forumhead h2 {
	padding: 0;
}

.forumbits .forumbit_nopost .forumhead span.forumtitle {
	text-indent: 0;
}

.forumbits .forumbit_nopost .forumhead span.forumlastpost {
	display: none;
}

.forumbit_nopost .forumhead .forumtitle, .forumbit_nopost .forumhead span, .forumbit_nopost .forumhead .collapse, .forumbit_post .forumhead h2 span {
	display:block;
	float: left;
	clear: right;
	font:   bold 12px Arial, Tahoma,Calibri,Verdana,Geneva,sans-serif;
	padding: 4px 0;
	color: rgb(186, 186, 186);
}

.forumbit_nopost .forumrowdata {
	clear:both;
	display:block;
	width: 100%;
}

.forumbit_nopost .subforumdescription {
	padding: 5px 10px;
	font-weight: normal;
	color: rgb(255, 153, 0);
	background: #373737 none   ;
}

.forumrow + .childsubforum .forumrow, .forumhead + .childforum .L2:first-child .L2 .forumrow, .forumhead + .childforum .L2 .L2:first-child .forumrow {
	background: rgb(39, 39, 39) url(images/Styles/Blackend/gradients/forumrow_bg.png) repeat-x  top;
	_background-image: none;
}


/* CSS Document */

/*threadlisthead*/
.threadlisthead {
	font:   bold 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	margin: 0;
	width: 100%;
	border: 1px solid rgb(51, 51, 51);
	background: rgb(51, 51, 51) url(images/Styles/Blackend/gradients/forumhead_bg.png) repeat-x  center;
	color: #ffffff;
	float: left;
	display:block;
	-moz-border-radius-topright: 0px;
	-moz-border-radius-topleft: 0px;
	-webkit-border-top-right-radius: 0px;
	-webkit-border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-top-left-radius: 0px;
	-moz-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	-webkit-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	box-shadow: -2px 2px 2px rgb(46, 46, 46);
	position: relative;
}

.threadlisthead a, .threadlisthead a:hover {
	color: #ffffff;
}

.threadlisthead div {
	/*border-top: 1px solid transparent;*/
	margin-left: 3px;
	margin-right: 3px;
	-moz-border-radius-topright: 0px;
	-moz-border-radius-topleft: 0px;
	-webkit-border-top-right-radius: 0px;
	-webkit-border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-top-left-radius: 0px;
}

.threadlisthead span.threadinfo, .threadlisthead span.threadinfo_withnotification, .threadlisthead span.threadstats, .threadlisthead span.threadreplies, .threadlisthead span.threadviews, .threadlisthead span.threadnotification, .threadlisthead span.threadlastpost {
	display:block;
	float: left;
	clear: right;
	padding: 4px 0;
}

.threadlisthead span.threadinfo {
	width: 62%;
}

.threadlisthead span.threadinfo_withnotification {
	width: 47%;
}

.threadlisthead span.threadinfo .threadtitle {
	padding-left: 10px;
}

.threadlisthead span.threadreplies {
	width: 6%;
	text-align:center;
}

.threadlisthead span.threadviews {
	width: 6%;
	text-align:center;
}

.threadlisthead span.threadstats {
	text-align:center;
	width: 12%;
}

.threadlisthead span.threadnotification {
	width: 10%;
	text-align: center;
	word-wrap: break-word;
}

.threadlisthead span.threadlastpost {
	width: 23%;
	text-align:left;
	padding-left: 2%;
}

.threadlisthead a:hover {
	background: transparent;
}

.threadlisthead .threadimod {
	position: absolute;
	right: 5px;
	padding-top: 5px;
}

/*threadbit*/
.threadbit{
	padding:0;
	width:100%;
	display:block;
	clear:both;
	color: rgb(204, 204, 204);
	float: left;
	position: relative;
	-moz-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	-webkit-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	box-shadow: -2px 2px 2px rgb(46, 46, 46);
}


.threadbit .threadtitle {
	margin-top: 5px;
	font-size: 13px;
}

.threadbit .threadtitle_unread {
	font-weight: bold;
}

.threadbit .threaddetails {
	float: right;
	margin-right: 10px;
}

.threadbit .sticky{
	background: rgb(140, 140, 140) url(images/Styles/Blackend/gradients/forumrow_bg.png) repeat-x  top;
	border: 1px solid rgb(51, 51, 51);
	border-top: 0;
	width: 100%;
	float: left;
	display:block;
	clear:both;
	position: relative;
}

.threadbit .nonthread{
	background: rgb(58, 58, 58) url(images/Styles/Blackend/gradients/forumrow_bg.png) repeat-x  top;
	border: 1px solid rgb(51, 51, 51);
	border-top: 0;
	width: 100%;
	float: left;
	display:block;
	clear:both;
	position: relative;
	padding: 0.5em 0 0.5em;
	text-indent: 10px;
}

.threadbit .nonsticky, .threadbit .deleted, .threadbit .discussionrow, .threadbit .ignored {
	border: 1px solid rgb(51, 51, 51);
	border-top: 0;
	width:100%;
	float: left;
	display:block;
	clear:both;
	position: relative;
	margin-top: 0;
}

.threadbit .nonsticky, .threadbit .discussionrow {
	background: rgb(58, 58, 58) url(images/Styles/Blackend/gradients/forumrow_bg.png) repeat-x  top;
}

.threadbit .deleted, .threadbit .ignored {
	background: rgb(0, 0, 0) url(images/gradients/gradient-black-down_sm.png) repeat-x  ;
}

.threadbit .threadmeta {
	font-size: 12px;
}

.threadbit .threadstatus {
	min-height: 47px;
	height: auto;
}

.threadbit .threadstatus, .threadbit .threadinfo, .threadbit .threadinfo_withnotification, .threadbit .threadstats, .threadbit .threadlastpost, .threadbit .threaddeleted, .threadbit .threadnotification, .threadbit .nothreadstatus, .threadbit .threadthread, .threadbit img.statusicon {
	float: left;
	clear: right;
	display:inline-block;
}

.threadbit .threadinfo {
	width: 62%;
	min-width: 350px;
}

.threadbit .threadinfo_withnotification {
	width: 47%;
}

.threadbit .threadstats {
	width: 12%;
}

.threadbit .threadnotification {
	width: 10%;
}

.threadbit .threadthread {
	width: 10%;
}

.threadbit .threadstats {
	font-size: 12px;
	text-align: right;
	padding: 8.74px 0;
}

.threadbit .threadstats li {
	margin-right: 20px;
}

.threadbit .threadstats .replies, .threadbit .threadstats .views, .threadbit .threadstats .smallreplies {
	display: inline-block;
	float: left;
	clear: right;
	padding: 16.12px 0;
	text-align: center;
	font-size: 12px;
}

.threadbit .threadstats .replies, .threadbit .threadstats .views {
	width: 50%;
}

.threadbit .threadstats .smallreplies {
	width: 33.3%;
}

.threadbit .discussionrow .threadstats .views, .threadbit .ignored .threadstats .views {
	text-align:  center;
}

.threadbit .threadstats .replies a.understate:link {
	color: rgb(204, 204, 204);
}

.threadbit .threadlastpost {
	width: 23%;
	padding: 8.74px 0;
	padding-left: 2%;
	float: left;
	clear: right;
	display:block;
	height: 29.52px;
	font-size: 11px;
}

.threadbit .alt {
	background: rgb(116, 116, 116) url(images/Styles/Blackend/gradients/forumrow_bg.png) repeat-x left top;
}

.threadbit .threaddeleted {
	width: 33%;
	padding: 8.74px 0;
	float: left;
	clear: right;
	display: block;
	vertical-align: middle;
	padding-left:3%;
	font-size: 12px;
}

.threadbit .threadnotification {
	padding: 16.12px 0;
	font-size: 12px;
	text-align: center;
}

.threadbit .threadlastpost .username {
	font-size: 12px;
}

.threadbit .discussionrow img.statusicon {
        padding: 5px 10px;
}

.threadbit .discussionrow .inner {
	margin-left: 10px;
}
span.searchdesc, .threadbit .discussionrow .inner span.searchdesc {
	font-size: 11px;
}

.threadbit .discussionrow .threadinfo {
	padding: 12.38px 0;
}

.threadbit .discussionrow.hasstatus .threadinfo {
	width: 62%;
	padding: 0;
}

.threadbit .discussionrow.hasstatus .threadlastpost {
	height: auto;
}

.threadbit .discussionrow.hasstatus .threadtitle {
	margin-top: 5px;
}

.threadbit .discussionrow.hasstatus .threadstats {
	padding: 17.5px 0; 
	font: 12px;
}

.threadbit .discussionrow.hasstatus .threadstats li {
	margin-left: 10px;
}

.threadbit .discussionrow .threadtitle {
	margin-top: 0;
}

.threadbit .discussionrow .threadstats {
	font-size: {vb;stylevar mid_fontSize};
	padding: 5px 0;
}

.threadbit .discussionrow .threadlastpost {
	padding-left: 3%;
	height: 44.28px};
}

.threadbit .threadimod {
	width: 0%;
	overflow: show;
}

.threadbit .threadimod input {
	position: absolute;
	right: 1%;
	margin-top: 17px;
}

.threadbit .threadnotification + .threadimod {
	position:absolute;
	right: 5px;
	margin-top: 0;
}

.threadbit.imod_highlight .deleted,
.threadbit.imod_highlight .sticky,
.threadbit.imod_highlight .nonsticky,
.threadbit.imod_highlight .discussionrow,
.threadbit.imod_highlight .alt,
.threadbit.imod_highlight .ignored {
	background-color:#d37700;
}

/* threadbit status */
.threadbit .nonsticky a.threadstatus, .threadbit .sticky a.threadstatus {
	background-repeat: no-repeat;
	background-position: 10px 4px;
	position: relative;
	float: left;
	clear: right;
	width: 60px;
	display:block;
}

.threadbit .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_old-30.png); }
.threadbit.dot .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_dot-30-right.png); }
.threadbit.dot.hot .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_dot_hot-30-right.png); }
.threadbit.dot.hot.lock .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_dot_hot_lock-30-right.png); }
.threadbit.dot.hot.lock.new .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_dot_hot_lock_new-30-right.png); }
.threadbit.dot.hot.new .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_dot_hot_new-30-right.png); }
.threadbit.dot.lock .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_dot_lock-30-right.png); }
.threadbit.dot.lock.new .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_dot_lock_new-30-right.png); }
.threadbit.dot.new .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_dot_new-30-right.png); }
.threadbit.hot .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_hot-30.png); }
.threadbit.hot.lock .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_hot_lock-30.png); }
.threadbit.hot.lock.new .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_hot_lock_new-30.png); }
.threadbit.hot.new .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_hot_new-30.png); }
.threadbit.lock .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_lock-30.png); }
.threadbit.lock.new .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_lock_new-30.png); }
.threadbit.moved .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_moved-30.png); }
.threadbit.moved.new .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_moved_new-30.png); }
.new .threadstatus { background-image: url(images/Styles/Blackend/statusicon/thread_new-30.png); }

.threadbit .deleted .threadstatus {
	background: url(images/Styles/Blackend/statusicon/thread_deleted_30-right.png) no-repeat 10px 4px;
	position: relative;
	float: left;
	clear: right;
	width: 60px;
	display:block;

}

/*threadbit ratings */
.threadbit .threadtitle {
	background:transparent none no-repeat right top;
	padding-left:0;
	margin-right: 10px;
}
.threadbit .rating1 .threadtitle { background-image:url(images/rating/rating-trans-15_1.png); padding-right:15px; }
.threadbit .rating2 .threadtitle { background-image:url(images/rating/rating-trans-15_2.png); padding-right:30px; }
.threadbit .rating3 .threadtitle { background-image:url(images/rating/rating-trans-15_3.png); padding-right:45px; }
.threadbit .rating4 .threadtitle { background-image:url(images/rating/rating-trans-15_4.png); padding-right:60px; }
.threadbit .rating5 .threadtitle { background-image:url(images/rating/rating-trans-15_5.png); padding-right:75px; }

/*threadbit icon*/
.threadbit .title {
	background:transparent none no-repeat left top;
}

.threadbit .pagination {
	position: relative;
	display: inline-block;
	margin-left: 5px;
	margin-top: 0.25em;
}

.threadbit .pagination dd span {
	padding-top: 0;
	padding-bottom: 0;
}

.threadbit .pagination a {
	padding: 0 4px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	color: rgb(251, 251, 251);
	font-size: 11px;
	display: inline;
	float: none;
}

.threadbit .deleted .threadinfo {
	width: 62%
}

.threadbit .deleted .author {
	display: inline-block;
	float: left;
}

.threadbit .managethread {
	display: inline-block;
	float: left;
	clear: right;
}

.threadbit .managethread li {
	display: inline;
	margin-left: 10px;
}

.threadinfo_withnotification .statusicon {
	padding:5px;
	float:left;
}

.threadbit.attachments {
    margin: 0;
    border: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    background: transparent;
    font-size: 13px;
}

/*************************************************/
/* ADS THREADS */
#ad_forum_below_threadlist {
        width:100%;
        padding:0 0 0 0;
        text-align:left;
}




/* CSS Document */
/* this might need to get renamed */
/* wgo */
.wgo_block {
	display:block;
	margin-top: 15px;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	-moz-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	-webkit-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	box-shadow: -2px 2px 2px rgb(46, 46, 46);
	margin-bottom: 10px;
}

.wgo_block .blockbody {
	border: 1px solid rgb(66, 66, 66);
	background: rgb(31, 31, 31) url(images/Styles/Blackend/gradients/wgo_bg.png) repeat-x  top;
	_background-image: none;
}

.wgo_block .blockhead {
	font-size:12px;
	font-weight:bold;
	color: rgb(255, 255, 255);
	background: #707070 url(images/Styles/Blackend/gradients/forumhead_bg.png) repeat-x  center;
	_background-image: none;
	border: 1px solid rgb(66, 66, 66);
}

.wgo_block .time {
	color: rgb(204, 204, 204);
}

.wgo_block .section {
	display:block;
	padding: 0 0 0.5em;
	font:    12px ;
	color: rgb(204, 204, 204);
	clear:both;
	width: 100%;
}

.wgo_block .blocksubhead {
	padding-left: 10px;
	font: 13px;
	color: rgb(204, 204, 204);
	background: transparent;
	padding-bottom: 5px;
}

.wgo_block .section:first-child .blocksubhead {
	border-top: 0;
}

.wgo_block .section .blocksubhead img {
	padding-right: 5px;
}

.wgo_block .section div, .wgo_block .section ol {
	padding-left: 20px;
}

.wgo_block .section div p {
	padding-bottom: 5px;
}

.wgo_block .section div ol {
	padding-left: 0;
}

.wgo_block .section dl dt {
	display:inline;
}

.wgo_block .section dl dt:after {
	content:":";
}

.wgo_block .section dl dd {
	display: inline;
	margin-right:5px;
}

.wgo_block .section dl.icon_legends dt {
	float: left;
	clear: right;
	margin-right: 5px;
}

.wgo_block .section dl.icon_legends dt:after {
	content: "";
}

.wgo_block .section dl.icon_legends dd {
	margin-bottom: 5px;
	display:block;
}

#wgo_onlineusers .commalist li {
	margin-left: 1px; 
}

#wgo_birthdays .commalist li { 
	margin-left: 1px; 
}

.forum_info {
	margin-bottom: 5px;
	float: left;
	width: 100%;
	clear:both;
	position: relative;
	top: -10px;
	color: rgb(204, 204, 204);
	font:    12px ;
}

.forum_info .blockhead {
	font-size:12px;
	font-weight:bold;
	color: rgb(255, 255, 255);
	background: #707070 url(images/Styles/Blackend/gradients/forumhead_bg.png) repeat-x  center;
	_background-image: none;
	border: 1px solid rgb(66, 66, 66);
	margin-top: 5px;
	-moz-box-shadow: -2px 0 2px rgb(46, 46, 46);
	-webkit-box-shadow: -2px 0 2px rgb(46, 46, 46);
	box-shadow: -2px 0 2px rgb(46, 46, 46);
}

.forum_info a.collapse {
	position: absolute;
	top: 6.88px;
}

.forum_info .blockbody {
	border-bottom: 1px solid rgb(66, 66, 66);
	border-left: 1px solid rgb(66, 66, 66);
	border-right: 1px solid rgb(66, 66, 66);
	background: rgb(31, 31, 31) url(images/Styles/Blackend/gradients/wgo_bg.png) repeat-x  top;
	_background-image: none;
	-moz-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	-webkit-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	box-shadow: -2px 2px 2px rgb(46, 46, 46);
}

.forum_info_subblock, .info_subblock {
	padding: 5px 10px;
}

.forum_info_form .options_input_wrapper {
	float: right;
	display: inline-block;
}

.forum_info_form .options_input_block {
	float: left;
	display:inline-block;
	padding: 10px 10px;
}

.forum_info_form .options_input_block .description {
	display: none;
}

.forum_info_form .options_input_block label {
	display:block;
}

.forum_info_form .options_input_block .checkradio li {
	display:inline-block;
	margin-right: 10px;
}

.forum_info_form .options_input_block .button {
	position: relative;
	margin-top: 15.99px;
}

.forum_info .options_block_container, .thread_info .options_block_container {
	width: 100%;
	float: left;
	display:block;
	position: relative;
	top: 0;
	padding-top:0;
	margin-top: 0;
}

.forum_info .options_block, .thread_info .options_block, .forum_info .options_block2, .thread_info .options_block2 {
	width: 49%;
	padding-right: 0.5%;
	float: left;
	clear: right;
	position: relative;
}


.forum_info .options_block .options_correct, .thread_info .options_block .options_correct, 
.forum_info .options_block2 .options_correct, .thread_info .options_block2 .options_correct {
margin-right:-1.1%;
}

.forum_info .options_block2 {
	margin-left: 1%;
}

.thread_info .options_block2 {
	margin-right: 1%;
}

dl.icon_legends dt {
	float: left;
	clear: right;
	margin-right: 5px;
}

dl.icon_legends dt:after {
	content: "";
}

dl.icon_legends dd {
	margin-bottom: 5px;
	display:block;
}

.info_subblock ul li {
	margin-bottom: 2px;
}

.bbcodeblock ul li a, .rules_link a {
	font-weight:bold;
}


.thread_info {
	margin-bottom: 5px;
	float: left;
	width: 100%;
	clear:both;
	position: relative;
	top: -10px;
	margin-bottom: 0;
	color: rgb(204, 204, 204);
	font:    12px ;
}

.thread_info a {
	font-weight:;
}

.thread_info h4 {
	font-size:12px;
	font-weight:bold;
	color: rgb(255, 255, 255);
	background: #707070 url(images/Styles/Blackend/gradients/forumhead_bg.png) repeat-x  center;
	_background-image: none;
	border: 1px solid rgb(66, 66, 66);
	margin-top: 5px;
	-moz-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	-webkit-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	box-shadow: -2px 2px 2px rgb(46, 46, 46);
}

.thread_info h5 {
	display: none;
}

.thread_info .blockbody {
	border-bottom: 1px solid rgb(66, 66, 66);
	border-left: 1px solid rgb(66, 66, 66);
	border-right: 1px solid rgb(66, 66, 66);
	background: rgb(31, 31, 31) url(images/Styles/Blackend/gradients/wgo_bg.png) repeat-x  top;
	_background-image: none;
	-moz-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	-webkit-box-shadow: -2px 2px 2px rgb(46, 46, 46);
	box-shadow: -2px 2px 2px rgb(46, 46, 46);
}

.thread_info .inner_block, .info_subblock {
	padding: 4px 10px;
}

ul.icon_list li {
	display:block;
	width: 100%;
	margin-bottom: 5px;
}

.inner_block .commalist {
	margin-top: 5px;
}

#thread_info_block_1 {
	width:34.9%;
	float:left;
}

#thread_info_block_1 > * {
	margin-right:2px;
}

#thread_info_block_2 {
	width:65%;
	float:right;
}

#forumrules {
	border: 0;
	background: transparent;
}

/* Similar Threads */
.similar_threads {
	clear:both;
}

.similar_threads li {
	padding:5px 10px 5px 10px;
}

ol.similar_threads li h6 a {
	font:    12px ;
}

.similar_threads .starter_forum {
	font-size:11px;
}

.similar_threads .titleblock {float:left}
.similar_threads .dateblock {float:right; text-align:right}

