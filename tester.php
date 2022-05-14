<!-- IE in quirks mode -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<title>Fixed header and left-sidebar</title>
<style type="text/css">
 body{
  margin:0;
  padding:header-<length> 0 0 left-sidebar-<length>;
 }
 div#header{
  position:absolute;
  top:0;
  left:0;
  width:500%;
  height:header-<length>;
 }
 div#left-sidebar{
  position:absolute;
  top:header-<length>;
  left:0;
  width:left-sidebar-<length>;
  height:100%;
 }
 @media screen{
  body>div#header{
   position:fixed;
  }
  body>div#left-sidebar{
   position:fixed;
  }
 }
 * html body{
  overflow:hidden;
 } 
 * html div#content{
  height:100%;
  overflow:auto;
 }
</style>
<div id="header"> header </div>
<div id="left-sidebar"> left-sidebar </div>
<div id="content"> content </div>