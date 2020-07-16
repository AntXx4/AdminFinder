<? php
// Nama Penulis: Ac3p_Cyb3r
// Daftar Informasi: 4001 daftar


cetak "   
	
 █████╗ ██████╗ ███╗ ███╗██╗███╗ ██╗ ███████╗██╗███╗ ██╗█ █████╗ ███████╗██████╗ 
██╔══██╗██╔══██╗████╗ ████║██║████╗ ██║ ██╔════╝██║██ ██╗ ██║██╔══██╗██╔════╝██╔══██╗
███████║██║ ██║██╔████╔██║██║██╔██╗ ██║ █████╗ ██║██╔█ █╗ ██║██║ ██║█████╗ ██████╔╝
██╔══██║██║ ██║██║╚██╔╝██║██║██║╚██╗██║ ██╔══╝ ██║██║ ╚██╗██║██║ ██║██╔══╝ ██╔══██╗
██║ ██║██████╔╝██║ ╚═╝ ██║██║██║ ╚████║ ██║ ██║██║ ╚████║ ██████╔╝███████╗██║ ██║
╚═╝ ╚═╝╚═════╝ ╚═╝ ╚═╝╚═╝╚═╝ ╚═══╝ ╚═╝ ╚═╝╚═╝ ╚═══╝╚═════ ╝ ╚══════╝╚═╝ ╚═╝
   
===========================================                                                                             
  Nama Penulis: Ac3p_Cyb3r
  Daftar informasi: 4001 daftar
  Tim Saya: Keamanan Cyber ​​Mouse
===========================================
" ;

echo  "masukan situs:" ;
$ target = trim ( fgets ( STDIN ));
$ list = "mcs_wordlist.txt" ;
if (! preg_match ( "/ ^ http: \ / \ //" , $ target ) AND! preg_match ( "/ ^ https: \ / \ //" , $ target )) {
	$ targetnya = "http: // $ target" ;
} lain {
	$ targetnya = $ target ;
}

$ buka = fopen ( "$ list" , "r" );
$ ukuran = filesize ( "$ list" );
$ baca = fread ( $ buka , $ ukuran );
$ daftar = meledak ( "\ r \ n" , $ baca );

foreach ( $ daftar  sebagai  $ login ) {
	$ log = "$ targetnya / $ login" ;
	$ ch = curl_init ( "$ log" );
	curl_setopt ( $ ch , CURLOPT_FOLLOWLOCATION , 1 );
	curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
	curl_exec ( $ ch );
	$ httpcode = curl_getinfo ( $ ch , CURLINFO_HTTP_CODE );
	curl_close ( $ ch );
	if ( $ httpcode == 200 ) {
		 $ handle = fopen ( "result.txt" , "a +" );
		fwrite ( $ handle , "$ log \ n" );
		cetak "\ n \ n [" . tanggal ( 'H: m: s' ). "] Mencoba: $ log => Ditemukan \ n" ;
	} lain {
		cetak "\ n [" . tanggal ( 'H: m: s' ). "] Mencoba: $ log => tidak di temukan" ;
	}
}
  
?>
