<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %> <%@
taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %> <%@ taglib
prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery
  id="query01"
  jdbcDriver="com.mysql.jdbc.Driver"
  jdbcUrl="jdbc:mysql://localhost/uasdwaw?user=root&password="
  catalogUri="/WEB-INF/queries/fakta_product.xml"
>
  select {[Measures].[orderQTY],[Measures].[sub_total]} ON COLUMNS,
  {([Time].[All Times], [Product].[All products], [store].[All stores],
  [contact].[All contacts])} ON ROWS from [produk]
</jp:mondrianQuery>

<c:set var="title01" scope="session">Query UAS DWO using Mondrian OLAP</c:set>
