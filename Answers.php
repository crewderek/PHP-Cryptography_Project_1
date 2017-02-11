<?php
/**
 * Created by PhpStorm.
 * User: derek
 * Date: 2/6/17
 * Time: 12:30 PM
 */
require_once ("Encryption.php");
require_once ("SubstitutionCipher.php");

use Encryption\Encryption;
use Cryptography\SubstitutionCipher;

function FormatLongText(string $message, int $increment) : string{
	//Implement
}

//Problem 1 of project 1
//The cipher text
$message = "JGKYYBGQRGAMELMKSQGLSBDGKEKSEJGLYWESCGJQWEIIEGJIBAQGKDCBWGRMUGKGKLEBKSCTATBK
			MSUGJEIYGKDCGDMKLBOBBKWBGISCYOTSGRBQEBRMUJERUMQSTKBRCGDQBDTLBDCEJSMWGKSSMGVMEDSCBJMQSEUE
			LGSEMKLMKRBPTBKSTNMKCERDERGRSBQRCBIBUSKBWMQIBGKRSCBLESYMUCERUMQBUGSCBQRGKDSMMHTNCERQBRED
			BKLBGSRTIIEVGKRERIGKDKBGQLCGQIBRSMKRMTSCLGQMIEKGSCERERIGKDERGVBQYREKATIGQMKBESLMKRERSRMU
			IESSIBBIRBSCGKSCBRBGRGKDGKDERGOMTSSCQBBJEIBRIMKAESROQBGDSCGSKMNMEKSBXLBBDRGPTGQSBQMUGJEI
			BESERRBNGQGSBDUQMJSCBJGEKIGKDOYGRLGQLBIYNBQLBNSEOIBLQBBHMMZEKAESRWGYSCQMTACGWEIDBQKBRRMU
			QBBDRGKDRIEJBGUGVMQESBQBRMQSMUSCBJGQRCCBKSCBVBABSGSEMKGRJEACSOBRTNNMRBDERRLGKSMQGSIBGRSD
			WGQUERCKMSQBBRMUGKYJGAKESTDBGQBSMOBRBBKKBGQSCBWBRSBQKBXSQBJESYWCBQBUMQSJMTISQEBRSGKDRGKD
			WCBQBGQBRMJBJERBQGOIBUQGJBOTEIDEKARSBKGKSBDDTQEKARTJJBQOYSCBUTAESEVBRUQMJLCGQIBRSMKDTRSG
			KDUBVBQJGYOBUMTKDEKDBBDSCBOQERSIYNGIJBSSMOTSSCBWCMIBERIGKDWESCSCBBXLBNSEMKMUSCERWBRSBQKN
			MEKSGKDGIEKBMUCGQDWCESBOBGLCMKSCBRBGLMGRSERLMVBQBDWESCGDBKRBTKDBQAQMWSCMUSCBRWBBSJYQSIBR
			MJTLCNQEZBDOYSCBCMQSELTISTQERSRMUBKAIGKDSCBRCQTOCBQBMUSBKGSSGEKRSCBCBEACSMUUEUSBBKMQSWBK
			SYUBBSGKDUMQJRGKGIJMRSEJNBKBSQGOIBLMNNELBOTQSCBKEKASCBGEQWESCESRUQGAQGKLB";
//The key
$key = "GOLDBUG";
$encryption = new Encryption($message, $key);
$cipher = new SubstitutionCipher($encryption);
//print_r($cipher->GetFrequencies());
$cipher->DecodeWithKey();
print($cipher->GetEncryption()->GetMessage());
//print SubstitutionCipher::DecryptWithKnownKey($message, $key);

//The answer to problem 1

/*MANYYEARSAGOICONTRACTEDANINTIMACYWITHAMRWILLIAMLEGRANDHEWASOFANANCIENTHUGUENAAAAOTFAMILYANDHADONCEBEEN
WEALTHYBUTASERIESOFMISFORTUNESHADREDUCEDHIMTOWANTTOAVOIDTHEMORTIFIAAAACATIONCONSEQUENTUPONHISDISASTERSHE
LEFTNEWORLEANSTHECITYOFHISFOREFATHERSANDTOOKUPHISRESIDAAAAENCEATSULLIVANSISLANDNEARCHARLESTONSOUTHCAROLI
NATHISISLANDISAVERYSINGULARONEITCONSISTSOFAAAALITTLEELSETHANTHESEASANDANDISABOUTTHREEMILESLONGITSBREADTH
ATNOPOINTEXCEEDSAQUARTEROFAMILAAAAEITISSEPARATEDFROMTHEMAINLANDBYASCARCELYPERCEPTIBLECREEKOOZINGITSWAYTHR
OUGHAWILDERNESSOFAAAAREEDSANDSLIMEAFAVORITERESORTOFTHEMARSHHENTHEVEGETATIONASMIGHTBESUPPOSEDISSCANTORATLEA
STDAAAAWARFISHNOTREESOFANYMAGNITUDEARETOBESEENNEARTHEWESTERNEXTREMITYWHEREFORTMOULTRIESTANDSANDAAAAWHEREARE
SOMEMISERABLEFRAMEBUILDINGSTENANTEDDURINGSUMMERBYTHEFUGITIVESFROMCHARLESTONDUSTAAAAANDFEVERMAYBEFOUNDINDEED
THEBRISTLYPALMETTOBUTTHEWHOLEISLANDWITHTHEEXCEPTIONOFTHISWESTERNPAAAAOINTANDALINEOFHARDWHITEBEACHONTHESEACOAST
ISCOVEREDWITHADENSEUNDERGROWTHOFTHESWEETMYRTLESAAAAOMUCHPRIZEDBYTHEHORTICULTURISTSOFENGLANDTHESHRUBHEREOFTEN
ATTAINSTHEHEIGHTOFFIFTEENORTWENAAAATYFEETANDFORMSANALMOSTIMPENETRABLECOPPICEBURTHENINGTHEAIRWITHITSFRAGRANCE
*/


//Problem 2 of Project 1
$crib = "virginia";
$message = "KJSNSTHHDUSOPKNYKURQNDSAPNSTOQNSLNKPSEPSARYTEDLCSNDOESJPSNSATNKQJAPCSTAVSJPQNSOKUTITJJTISAP
CKITORSTHSRSTHSOPTYSATPTCKPSHDJHYJECRQNBVDNBDJDTDJSDBCPSSJPWSJPYPWKTJAQLKJASLTNPDJBHSUPTHKEGSARKXWDPCPC
SCKPSHOKWJSNNKRSNPIKNNDOOTUPSNJKPCSTNDJBUNKIRSTHSUKNPWSJPYPCNSSYSTNOIKNNDOORNKGSPCSRKXKLSJTJAUKQJATJKPST
JAPCNSSEDLCSNPSXPOPCSJKPSPKHACKWRSTHSTJAPWSJPYJDJSKPCSNISJCTAADOEKVSNSATHTNBSOPTOCKUBKHADJJSWISXDEKPKGSS
LPCSPNSTOQNSOTUSRSTHSTBNSSAPKPNTJOLKNPDPPKVDNBDJDTTJARQNYDPASENYLPDJBPCSUDNOPEDLCSNPSXPWKQHANSVSTHPCSPNSTO
QNSOHKETPDKJPCSOSEKJADPOEKJPSJPOTJAPCSPCDNATHDOPKUNSHTPDVSOWCKWSNSPKOCTNSDJDPTUPSNPNYDJBPKRNSTGPCSEDLCSNOU
KNYSTNOIKNNDOOOCTNSAPCSIWDPCTJQJGJKWJUNDSJAWCKRNKGSPCSOSEKJAEDLCSNQODJBTGSYUKNISAUNKIPCSASEHTNTPDKJKUDJASLS
JASJESPCDONSVSTHSAJKPKJHYPCSPNSTOQNSOVTHQSIKNSPCTJPWSJPYIDHHDKJDJPKATYOOPTJATNAORQPTHOKPCTPDPWTORQNDSAOKISW
CSNSJSTNRSAUKNAVDNBDJDTDJSDBCPSSJSDBCPUDVSPCSQJGJKWJUNDSJALQRHDOCSATJTJKJYIKQOLTILCHSPADOEHKODJBPCSOPKNYRST
HSOUDNOPTJAPCDNAEDLCSNONSITDJQJRNKGSJASOLDPSRSDJBTPPTEGSADJSTNJSOPRYOKISKUPCSWKNHAOBNSTPSOPENYLPTJTHYOPOWDHH
DTIUNDSAITJSVSJDJEHQASAPCSIDJPCSPNTDJDJBLNKBNTIUKNJSWNSENQDPOTPPCSQOODBJTHODJPSHHDBSJESOSNVDESTLNSEQNOKNPK
PCSJTPDKJTHOSEQNDPYTBSJEYRSETQOSKUPCDOITJYRSHDSVSPCTPPCSPNSTOQNSDOTCKTXTJAPCTPPCKITORSTHSITYCTVSJSVSNSVSJSXDOPSA";

//print SubstitutionCipher::DecryptWithKnownCrib(str_replace("\n", '', $message), $crib);

/* the answer

DHONOSMMRGOLIDNBDGYFNROUINOSLFNOKNDIOWIOUYBSWRKCONRLWOHIONOUSNDFHUICOSUXOHIFNOLDGSPSHHSPOUICDPSLY
OSMOYOSMOLISBOUSISCDIOMRHMBHWCYFNVXRNVRHRSRHORVCIOOHIJOHIBIJDSHUFKDHUOKSNIRHVMOGISMDWQOUYDZJRICICOC
DIOMLDJHONNDYONIPDNNRLLSGIONHDICOSNRHVGNDPYOSMOGDNIJOHIBICNOOBOSNLPDNNRLLYNDQOICOYDZDKOHSHUGDFHUSHDI
OSHUICNOOWRKCONIOZILICOHDIOIDMUCDJYOSMOSHUIJOHIBHRHODICONPOHCSUURLWDXONOUSMSNVOLISLCDGVDMURHHOJPOZRWD
IDQOOKICOINOSLFNOLSGOYOSMOSVNOOUIDINSHLKDNIRIIDXRNVRHRSSHUYFNBRIUOWNBKIRHVICOGRNLIWRKCONIOZIJDFMUNOXO
SMICOINOSLFNOLMDWSIRDHICOLOWDHURILWDHIOHILSHUICOICRNUSMRLIDGNOMSIRXOLJCDJONOIDLCSNORHRISGIONINBRHVIDY
NOSQICOWRKCONLGDNBOSNLPDNNRLLLCSNOUICOPJRICSHFHQHDJHGNROHUJCDYNDQOICOLOWDHUWRKCONFLRHVSQOBGDNPOUGNDPI
COUOWMSNSIRDHDGRHUOKOHUOHWOICRLNOXOSMOUHDIDHMBICOINOSLFNOLXSMFOPDNOICSHIJOHIBPRMMRDHRHIDUSBLLISHUSNULY
FISMLDICSIRIJSLYFNROULDPOJCONOHOSNYOUGDNUXRNVRHRSRHORVCIOOHORVCIGRXOICOFHQHDJHGNROHUKFYMRLCOUSHSHDHBPDF
LKSPKCMOIURLWMDLRHVICOLIDNBYOSMOLGRNLISHUICRNUWRKCONLNOPSRHFHYNDQOHUOLKRIOYORHVSIISWQOURHOSNHOLIYBLDPODG
ICOJDNMULVNOSIOLIWNBKISHSMBLILJRMMRSPGNROUPSHOXOHRHWMFUOUICOPRHICOINSRHRHVKNDVNSPGDNHOJNOWNFRILSIICOFLLR
VHSMLRHIOMMRVOHWOLONXRWOSKNOWFNLDNIDICOHSIRDHSMLOWFNRIBSVOHWBYOWSFLODGICRLPSHBYOMROXOICSIICOINOSLFNORLSCDS
ZSHUICSIICDPSLYOSMOPSBCSXOHOXONOXOHOZRLIOU
*/

//Problem 3 Project 1

$message = "IXXIFJXNQGPHWFOFQBFWFGBIRPFQHLREFHVLXKRPFIBIFRFFIRPZFIRNVERPHRRPBLJXVQGJHLOFBISJHRZPFGYFFIQE
HIGZQXLFQEOEBIRFQQBSFIZFLSVFHRFVRPHICHILHIGEFRHLCXVRHQHLPBLXJIRPHRHLCFIONLBFGRPFCLFQWFLHOXNRRPFBVWHVBXNL
ZXIZFVILRPFEJFVFLZVNRBIBLFGHIGLRNGBFGUFVPHULHQCXLRHLIHVVXJQEHLHCHIJBRPHCBZVXLZXUFCBSPRLZVNRBIBLFRPFRVHIL
BFIRZVFHRNVFLRPHRLJHVCHIGCNQRBUQEBIHGVXUXKJHRFVJBRPBIKBIBRFZXCUQHZFIZECFIJFIRRXHIGKVXXWFVRPBLSQXOFHOXNRR
PFBVQBRRQFHKKHBVLLFVFIFBIRPFBVHLLNVHIZFXKRPFBVFCUBVFXWFVCHRRFVBRBLUXLLBOQFRPHRRPFBIKNLXVBHNIGFVRPFCBZVXL
ZXUFGXRPFLHCFIXXIFSHWFHRPXNSPRRXRPFXQGFVJXVQGLXKLUHZFHLLXNVZFLXKPNCHIGHISFVXVRPXNSPRXKRPFCXIQERXGBLCBLLR
PFBGFHXKQBKFNUXIRPFCHLBCUXLLBOQFXVBCUVXOHOQFBRBLZNVBXNLRXVFZHQQLXCFXKRPFCFIRHQPHOBRLXKRPXLFGFUHVRFGGHELH
RCXLRRFVVFLRVBHQCFIKHIZBFGRPFVFCBSPROFXRPFVCFINUXICHVLUFVPHULBIKFVBXVRXRPFCLFQWFLHIGVFHGERXJFQZXCFHCBLLB
XIHVEFIRFVUVBLFEFRHZVXLLRPFSNQKXKLUHZFCBIGLRPHRHVFRXXNVCBIGLHLXNVLHVFRXRPXLFXKRPFOFHLRLRPHRUFVBLPBIRFQQF
ZRLWHLRHIGZXXQHIGNILECUHRPFRBZVFSHVGFGRPBLFHVRPJBRPFIWBXNLFEFLHIGLQXJQEHIGLNVFQEGVFJRPFBVUQHILHSHBILRNLH
IGFHVQEBIRPFRJFIRBFRPZFIRNVEZHCFRPFSVFHRGBLBQQNLBXICFIR";
$crib = "microscope";
	
//print SubstitutionCipher::DecryptWithKnownCrib(str_replace("\n", '', $message), $crib);

/* The answer
CRRCIKRGMWUSQIXIMLIQIWLCNUIMSHNBISDHRVNUICLCINIICNUYICNGDBNUSNNULHKRDMWKSHXILCJKSNYUIWZIICMBSCWYMRHIMBXBL
CNIMMLJICYIHJDISNIDNUSCFSCHSCWBINSHFRDNSMSHULHRKCNUSNSHFICXGHLIWNUIFHIMQIHSXRGNNUILDQSDLRGHYRCYIDCHNUIBKI
DIHYDGNLCLHIWSCWHNGWLIWPIDUSPHSMFRHNSHCSDDRKMBSHSFSCKLNUSFLYDRHYRPIFLJUNHYDGNLCLHINUINDSCHLICNYDISNGDIHNUSN
HKSDFSCWFGMNLPMBLCSWDRPRVKSNIDKLNULCVLCLNIYRFPMSYICYBFICKICNNRSCWVDRRQIDNULHJMRXISXRGNNUILDMLNNMISVVSLDHHID
ICILCNUILDSHHGDSCYIRVNUILDIFPLDIRQIDFSNNIDLNLHPRHHLXMINUSNNUILCVGHRDLSGCWIDNUIFLYDRHYRPIWRNUIHSFICRRCIJSQIS
NURGJUNNRNUIRMWIDKRDMWHRVHPSYISHHRGDYIHRVUGFSCWSCJIDRDNURGJUNRVNUIFRCMBNRWLHFLHHNUILWISRVMLVIGPRCNUIFSHLFPR
HHLXMIRDLFPDRXSXMILNLHYGDLRGHNRDIYSMMHRFIRVNUIFICNSMUSXLNHRVNURHIWIPSDNIWWSBHSNFRHNNIDDIHNDLSMFICVSCYLIWNUI
DIFLJUNXIRNUIDFICGPRCFSDHPIDUSPHLCVIDLRDNRNUIFHIMQIHSCWDISWBNRKIMYRFISFLHHLRCSDBICNIDPDLHIBINSYDRHHNUIJGMVRV
HPSYIFLCWHNUSNSDINRRGDFLCWHSHRGDHSDINRNURHIRVNUIXISHNHNUSNPIDLHULCNIMMIYNHQSHNSCWYRRMSCWGCHBFPSNUINLYDIJSDWI
WNULHISDNUKLNUICQLRGHIBIHSCWHMRKMBSCWHGDIMBWDIKNUILDPMSCHSJSLCHNGHSCWISDMBLCNUINKICNLINUYICNGDBYSFINUIJDISNWL
HLMMGHLRCFICN */


//Problem 4 Project 1

$crib = "";
$message = "#IURDP@ R  HAQ NIA FWIQ NQK I@H#RQ GI@@ #QK @SC#P RQ IROLUX. XWD!RNP KRX%RQDURWQX 
D#Q F@ GWCQKAK WQPB WQ %L@ DWHHWQ OWWK.#IURDPA RR  ULA OWNP WG #QB VWPR%RD#P NXXWDR#%RWQ RX ULA 
DWQXAIM#%RWQ WG UL@ Q#%CI#P NQK RHVI@XDIRV%RFPA IROL%X WG H#Q. ULAX@ IROLUX #I@ PRF@IUB, VIWVAIUB, 
XNGA%B #QK IAXRXUNQDA NONRQX% WVVIAXXRWQ.#IURDP@ RRR  UL@ VIRQDRVPA WG #QB XWMAI@ROQUB I@XRKAX AXXAQUR#PPB 
RQ %L@ Q#URWQ. QW FWKB, QW RQKRMRKC#P D#Q AJ@IU #CULWIR%B TLRDL KWAX QW% AHNQ#%@ @JVIAXXPB GIWH RU.#I%RDP@ RM  
PRF@I%B DWQXRXUX WG KWRQO NQB%LRQO TLRDL KWAX QW% LNIH WULAIX: %LCX, UL@ AJ@IDRX@ WG UL@ QN%CI#P IROLUX WG @NDL HNQ 
LNX WQPB ULWXA FWIKAIX TLRDL NXXCI@ W%L@I H@HFAIX WG ULA XWDRA%B UL@ AQYWBH@Q% WG UL@X@! X#HA IROL%X. UL@X@ FWIK@IX 
DNQ FA K@UAIH!RQ@K WQPB FB UL@ P#T.NIURDP@ M  %LA P#T L#X UL@ IROLU UW GWIFRK WQPB #DURWQX L#IHGCP UW! XWDRAUB. 
#QBULRQO TLRDL RX QW% GWIFRKK@Q FB ULA P#T DNQQW% FA RHVAKAK, #QK QW WQ@ DNQ FA DW!QXUI#RQAK %W KW TLN% RU KW@X 
QWU WIK@I.#IURDP@ MR  UL@ P#T RX ULA AJVIAXXRWQ WG ULA O@Q@INP TRPP. NPP %LA DRUREAQX LNM@ ULA IROL% WG DWQ%IRFC%RQO 
V@IXWQ#PPB WI ULIWCOL %L@RI IAVIAXAQ%#%RM@X UW RUX GWIH#URWQ. R% HCX% FA %L@ XNHA G!WI #PP, @RUL@I ULN% R% VIWUAD%X, 
WI %LN% R% VCQRXLAX. NPP ULA DRURE@QX, FA!RQO ASCNP RQ RUX @B@X, #I@ ASC#PPB #KHRXXRFPA UW #PP VCFPRD KROQR%R@X, VPNDAX 
#QK @HVPWBHAQUX, NDDWIKRQO %W UL!ARI DNVNDR%B #QK TRULWCU KRX%RQD%RWQ W%LAI %LNQ %LNU WG %LARI MRIUC@X #QK WG UL@RI 
UNP@QUX.#IURDP@ MRR  QW HNQ D#Q F@ #DDCX@K, NII@X%AK QWI KA%#RQ@K FCU RQ ULA D#XAX K@%@IHRQAK FB ULA PNT, NQK NDDWIKRQO 
UW UL@ GWIHX TLRDL R% L#X VIAXDIRF!AK. ULWX@ TLW XWPRDR%, K!RXVN%DL, DNIIB WCU WI DNCXA UW FA D#IIRAK WCU #IFRUINIB WIKAIX, 
HCXU FA VCQRXL@K; FCU #QB DRUREAQ D#PPAK WI X@RE@K CQKAI ULA U@IHX WG %LA PNT HCX% WF@B #U WQDA; LA I@QKAIX LRHX@PG DCPV#FPA F
B IAXRX%#QDA.#IURDP@ MRRR  %LA P#T XLWCPK @XUNFPRXL WQPB VAQNP%R@X ULN% #IA X%IRDUPB NQK AMRKAQ%PB Q@DAXX#IB, NQK QW WQA D#Q 
FA VCQRXL@K FC% CQKAI # PNT @X%NFPRXL@K NQK VIWHCPO#%AK FAGWI@ ULA WGG@QXA NQK PAONPPB NVVPR@K.NI%RDPA RJ  NQB H#Q! FARQO 
VIAXCHAK RQQWD@QU CQURP LA RX KADPNIAK DCPVNFP@, RG RU RX YCKO@K RQKRXVAQXNFP@ UW NII@XU LRH, NQB IROWI TLRDL !!TWCPK QW% 
F@ Q@D@XX#IB! GWI ULA XADCIRQO WG LRX VAIXWQ HCX% FA X@M@IAPB I@VIRHNQK@K FB ULA PNT.#IURDPA J  QW WQ@ HNB F@ KRX%CIFAK 
GWI LRX WVRQRWQX, @MAQ IAPRORWCX WQ@X, VIWMRKAK %L#U %L@RI H#QRGAX%N%RWQ KW@X QWU %IWCFP@ %LA VCFPRD WIK@I AX%NFPRXL@K 
FB %L@ P#T.NIURDP@ JR  %L@ GIA@ D!WHH!CQRD#%RWQ WG ULWCOL%X NQK W!G WVRQRWQX RX WQ@ WG UL@ HWXU VI@DRWCX IROLUX WG HNQ:
 NQB DRURE@Q %LCX H#B XV@NZ, TIR%@, VIRQU GIA@PB, AJDAVU %W IAXVWQK !%W UL@ #FCXA WG %LRX PRF@I%B, RQ %L@ D#XAX KAUAIHRQ@K 
 FB ULA PNT.#IURDP@ JRR  ULA OC#I#Q%A@ WG UL@ IROLUX WG HNQ #QK WG ULA DR%REAQ QAD@XXR%#%AX # VCFPRD GWID@: %LRX GWID@ 
 R!X ULCX RQX%RUCUAK GWI ULA #KM#Q%#OA WG #PP #QK QWU GWI UL@ VNI%RDCP#I CURPRUB WG %LWX@ RQ TLWH R% RX UICXU@K.NI%RDP@ J
 R!RR  GWI UL@ HNRQUAQNQ!D@ WG UL!@ VCFPRD GWID@ NQK GWI UL@ AJVAQKR%CI@X WG NK!HRQRXUINURWQ, # DWHHWQ DWQUIRFCURWQ RX 
 RQKRXV!AQXNFP@; RU HCXU FA @SCNPPB KRXUIRFCUAK F@UTA@Q NPP %LA DR%RE@QX, NDDWIKRQO %W UL@RI #FRPRUB %W V#B.NIURDPA JRM 
  @#DL DRUREAQ LNX %LA IROL% %W #XD@I%#RQ, FB LRHXAPG WI ULIWCOL LRX I@VI@X@Q%#URM@X, UL@ QAAK GWI N VCFPRD U#J, %W 
  DWQXAQU %W R% GIAAPB, UW ZQWT ULA CXAX %W TLRDL R% RX VCU, #QK WG K@%@IHRQRQO %LA VIWVWIURWQ, F#XRX, DWPPAD%RWQ, 
  #QK KCINURWQ.NIURDPA JM  UL@ XWDR@!UB L#X ULA IROLU WG I@SC@X%RQO NDDWCQU GIWH #QB VCFPR!D NOAQU WG R%X 
  NKHRQRXUIN%RWQ.#I%RDP@ JMR  NQB XWDRA%B! RQ TLRDL %L@ OC#INQ%AA WG IROL%X RX QW% #XXCIAK, QW!I %LA X@VNI#%RWQ 
  WG VWT@IX KA%@IHRQ@K, LNX QW DWQX%RUCURWQ.NIURDPA JMRR!  VIWVAIUB FARQO NQ RQMRWP#F!PA NQK XNDI@K IROLU, QW 
  WQ@ DNQ F@ KAVIRMAK WG VIRMN%@ CXNOA, RG R% RX QW% TL@Q %L@ VCFPRD QADAXXR%B, PAONPPB QW%AK, @MRK@QUPB 
  I@SCRIAX RU, NQK CQKAI UL@ DWQKR%RWQ WG N YCX% #QK VIRWI RQK@HQR%B.";

//$encryption = new Encryption($message, $key);
//$cipher = new SubstitutionCipher($encryption);
//print_r($cipher->GetFrequencies());

//print SubstitutionCipher::DecryptWithKnownCrib(str_replace("\n", '', $message), $crib);
/* The answer

"#IURDP@ R  HAQ NIA FWIQ NQK I@H#RQ GI@@ #QK @SC#P RQ IROLUX. XWD!RNP KRX%RQDURWQX
D#Q F@ GWCQKAK WQPB WQ %L@ DWHHWQ OWWK.#IURDPA RR  ULA OWNP WG #QB VWPR%RD#P NXXWDR#%RWQ RX ULA
DWQXAIM#%RWQ WG UL@ Q#%CI#P NQK RHVI@XDIRV%RFPA IROL%X WG H#Q. ULAX@ IROLUX #I@ PRF@IUB, VIWVAIUB,
XNGA%B #QK IAXRXUNQDA NONRQX% WVVIAXXRWQ.#IURDP@ RRR  UL@ VIRQDRVPA WG #QB XWMAI@ROQUB I@XRKAX AXXAQUR#PPB
RQ %L@ Q#URWQ. QW FWKB, QW RQKRMRKC#P D#Q AJ@IU #CULWIR%B TLRDL KWAX QW% AHNQ#%@ @JVIAXXPB GIWH RU.#I%RDP@ RM
PRF@I%B DWQXRXUX WG KWRQO NQB%LRQO TLRDL KWAX QW% LNIH WULAIX: %LCX, UL@ AJ@IDRX@ WG UL@ QN%CI#P IROLUX WG @NDL HNQ
LNX WQPB ULWXA FWIKAIX TLRDL NXXCI@ W%L@I H@HFAIX WG ULA XWDRA%B UL@ AQYWBH@Q% WG UL@X@! X#HA IROL%X. UL@X@ FWIK@IX
DNQ FA K@UAIH!RQ@K WQPB FB UL@ P#T.NIURDP@ M  %LA P#T L#X UL@ IROLU UW GWIFRK WQPB #DURWQX L#IHGCP UW! XWDRAUB.
#QBULRQO TLRDL RX QW% GWIFRKK@Q FB ULA P#T DNQQW% FA RHVAKAK, #QK QW WQ@ DNQ FA DW!QXUI#RQAK %W KW TLN% RU KW@X
QWU WIK@I.#IURDP@ MR  UL@ P#T RX ULA AJVIAXXRWQ WG ULA O@Q@INP TRPP. NPP %LA DRUREAQX LNM@ ULA IROL% WG DWQ%IRFC%RQO
V@IXWQ#PPB WI ULIWCOL %L@RI IAVIAXAQ%#%RM@X UW RUX GWIH#URWQ. R% HCX% FA %L@ XNHA G!WI #PP, @RUL@I ULN% R% VIWUAD%X,
WI %LN% R% VCQRXLAX. NPP ULA DRURE@QX, FA!RQO ASCNP RQ RUX @B@X, #I@ ASC#PPB #KHRXXRFPA UW #PP VCFPRD KROQR%R@X, VPNDAX
#QK @HVPWBHAQUX, NDDWIKRQO %W UL!ARI DNVNDR%B #QK TRULWCU KRX%RQD%RWQ W%LAI %LNQ %LNU WG %LARI MRIUC@X #QK WG UL@RI
UNP@QUX.#IURDP@ MRR  QW HNQ D#Q F@ #DDCX@K, NII@X%AK QWI KA%#RQ@K FCU RQ ULA D#XAX K@%@IHRQAK FB ULA PNT, NQK NDDWIKRQO
UW UL@ GWIHX TLRDL R% L#X VIAXDIRF!AK. ULWX@ TLW XWPRDR%, K!RXVN%DL, DNIIB WCU WI DNCXA UW FA D#IIRAK WCU #IFRUINIB WIKAIX,
HCXU FA VCQRXL@K; FCU #QB DRUREAQ D#PPAK WI X@RE@K CQKAI ULA U@IHX WG %LA PNT HCX% WF@B #U WQDA; LA I@QKAIX LRHX@PG DCPV#FPA F
B IAXRX%#QDA.#IURDP@ MRRR  %LA P#T XLWCPK @XUNFPRXL WQPB VAQNP%R@X ULN% #IA X%IRDUPB NQK AMRKAQ%PB Q@DAXX#IB, NQK QW WQA D#Q
FA VCQRXL@K FC% CQKAI # PNT @X%NFPRXL@K NQK VIWHCPO#%AK FAGWI@ ULA WGG@QXA NQK PAONPPB NVVPR@K.NI%RDPA RJ  NQB H#Q! FARQO
VIAXCHAK RQQWD@QU CQURP LA RX KADPNIAK DCPVNFP@, RG RU RX YCKO@K RQKRXVAQXNFP@ UW NII@XU LRH, NQB IROWI TLRDL !!TWCPK QW%
F@ Q@D@XX#IB! GWI ULA XADCIRQO WG LRX VAIXWQ HCX% FA X@M@IAPB I@VIRHNQK@K FB ULA PNT.#IURDPA J  QW WQ@ HNB F@ KRX%CIFAK
GWI LRX WVRQRWQX, @MAQ IAPRORWCX WQ@X, VIWMRKAK %L#U %L@RI H#QRGAX%N%RWQ KW@X QWU %IWCFP@ %LA VCFPRD WIK@I AX%NFPRXL@K
FB %L@ P#T.NIURDP@ JR  %L@ GIA@ D!WHH!CQRD#%RWQ WG ULWCOL%X NQK W!G WVRQRWQX RX WQ@ WG UL@ HWXU VI@DRWCX IROLUX WG HNQ:
 NQB DRURE@Q %LCX H#B XV@NZ, TIR%@, VIRQU GIA@PB, AJDAVU %W IAXVWQK !%W UL@ #FCXA WG %LRX PRF@I%B, RQ %L@ D#XAX KAUAIHRQ@K
 FB ULA PNT.#IURDP@ JRR  ULA OC#I#Q%A@ WG UL@ IROLUX WG HNQ #QK WG ULA DR%REAQ QAD@XXR%#%AX # VCFPRD GWID@: %LRX GWID@
 R!X ULCX RQX%RUCUAK GWI ULA #KM#Q%#OA WG #PP #QK QWU GWI UL@ VNI%RDCP#I CURPRUB WG %LWX@ RQ TLWH R% RX UICXU@K.NI%RDP@ J
 R!RR  GWI UL@ HNRQUAQNQ!D@ WG UL!@ VCFPRD GWID@ NQK GWI UL@ AJVAQKR%CI@X WG NK!HRQRXUINURWQ, # DWHHWQ DWQUIRFCURWQ RX
 RQKRXV!AQXNFP@; RU HCXU FA @SCNPPB KRXUIRFCUAK F@UTA@Q NPP %LA DR%RE@QX, NDDWIKRQO %W UL@RI #FRPRUB %W V#B.NIURDPA JRM
  @#DL DRUREAQ LNX %LA IROL% %W #XD@I%#RQ, FB LRHXAPG WI ULIWCOL LRX I@VI@X@Q%#URM@X, UL@ QAAK GWI N VCFPRD U#J, %W
  DWQXAQU %W R% GIAAPB, UW ZQWT ULA CXAX %W TLRDL R% RX VCU, #QK WG K@%@IHRQRQO %LA VIWVWIURWQ, F#XRX, DWPPAD%RWQ,
  #QK KCINURWQ.NIURDPA JM  UL@ XWDR@!UB L#X ULA IROLU WG I@SC@X%RQO NDDWCQU GIWH #QB VCFPR!D NOAQU WG R%X
  NKHRQRXUIN%RWQ.#I%RDP@ JMR  NQB XWDRA%B! RQ TLRDL %L@ OC#INQ%AA WG IROL%X RX QW% #XXCIAK, QW!I %LA X@VNI#%RWQ
  WG VWT@IX KA%@IHRQ@K, LNX QW DWQX%RUCURWQ.NIURDPA JMRR!  VIWVAIUB FARQO NQ RQMRWP#F!PA NQK XNDI@K IROLU, QW
  WQ@ DNQ F@ KAVIRMAK WG VIRMN%@ CXNOA, RG R% RX QW% TL@Q %L@ VCFPRD QADAXXR%B, PAONPPB QW%AK, @MRK@QUPB
  I@SCRIAX RU, NQK CQKAI UL@ DWQKR%RWQ WG N YCX% #QK VIRWI RQK@HQR%B.";
*/