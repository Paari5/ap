

<?php
//Open a new connection to the MySQL server
include("../database.php");

String qry="SELECT cv FROM mst_user ";
Statement st = con.createStatement(qry);                
ResultSet rs = st.executeQuery();
if(rs.next()) //show one document
{
    byte[] bytearray = new byte[1048576];
    int size=0;
    InputStream is = rs.getBinaryStream(2);
   // String contentType=rs.getString("content_type");
    String contentType = "application/msword"; //doc
    String contentType = "application/vnd.openxmlformats-officedocument.wordprocessingml.document"; //docx                     
    response.reset();
    response.setContentType(contentType);
    while((size=is.read(bytearray))!= -1 )
    {
        response.getOutputStream().write(bytearray,0,size);
    }
}

//return null;
	
	

}

else {
	echo 'Error!';
}
?>