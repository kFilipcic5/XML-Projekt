<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <h2>Jelovnik</h2>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>Kategorija</th>
        <th>Ime</th>
        <th>Cijena</th>
        <th>Opis</th>
      </tr>

      <tr bgcolor='#EEB4A8'>
      <td><h2><xsl:value-of select="meni/kategorija[1]/@hrana"/></h2></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>  
      <xsl:for-each select="meni/kategorija[@hrana='juha']/jelo">
        <tr>
          <td></td>
          <td><xsl:value-of select="ime"/></td>
          <td><xsl:value-of select="cijena"/></td>
          <td><xsl:value-of select="opis"/></td>
        </tr>
      </xsl:for-each>
      <tr bgcolor='#EEB4A8'>
      <td><h2><xsl:value-of select="meni/kategorija[2]/@hrana"/></h2></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <xsl:for-each select="meni/kategorija[@hrana='glavno']/jelo">
        <tr>
          <td></td>
          <td><xsl:value-of select="ime"/></td>
          <td><xsl:value-of select="cijena"/></td>
          <td><xsl:value-of select="opis"/></td>
        </tr>
      </xsl:for-each>

      <tr bgcolor='#EEB4A8'>
      <td><h2><xsl:value-of select="meni/kategorija[3]/@hrana"/></h2></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <xsl:for-each select="meni/kategorija[@hrana='rostilj']/jelo">
        <tr>
          <td></td>
          <td><xsl:value-of select="ime"/></td>
          <td><xsl:value-of select="cijena"/></td>
          <td><xsl:value-of select="opis"/></td>
        </tr>
      </xsl:for-each>

      <tr bgcolor='#EEB4A8'>
      <td><h2><xsl:value-of select="meni/kategorija[4]/@hrana"/></h2></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <xsl:for-each select="meni/kategorija[@hrana='slastice']/jelo">
        <tr>
          <td></td>
          <td><xsl:value-of select="ime"/></td>
          <td><xsl:value-of select="cijena"/></td>
          <td><xsl:value-of select="opis"/></td>
        </tr>
      </xsl:for-each>

    </table>

  </body>
  </html>
</xsl:template>
</xsl:stylesheet>