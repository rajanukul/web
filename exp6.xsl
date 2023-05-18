<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" omit-xml-declaration="no"/>

<xsl:template match="/">

<html>

<head>

<title>Book</title>

</head>

<body>

<center>

<table border="1" bgcolor=”grey”>

<thead >

<tr>

<th>title</th>

<th>authorname</th>

<th>isdnno</th>

<th>publisher</th>

<th>edition</th>

<th>price</th>

</tr>

</thead>

<xsl:for-each select="book/bookinfo">

<tr>

<td style="background-color:pink"><xsl:value-of select="title"/></td>

<td style="background-color:red"><xsl:value-of select="authorname"/></td>

<td style="background-color:green"><xsl:value-of select="isdnno"/></td>

<td style="background-color:purple"><xsl:value-of select="publisher"/></td>


<td style="background-color:green"><xsl:value-of select="isdnno"/></td>

<td style="background-color:purple"><xsl:value-of select="publisher"/></td>

<td style="background-color:brown"><xsl:value-of select="edition"/></td>

<td style="background-color:yellow"><xsl:value-of select="price"/></td>

</tr>

</xsl:for-each>

</table>

</center>

</body>

</html>

</xsl:template>

</xsl:stylesheet>
