<?php
/*
	Project: PHP Typography
	Project URI: http://kingdesk.com/projects/php-typography/
	
	File modified to place pattern and exceptions in arrays that can be understood in php files.
	This file is released under the same copyright as the below referenced original file
	Original unmodified file is available at: http://mirror.unl.edu/ctan/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
	Original file name: hyph-ro.tex
	
//============================================================================================================
	ORIGINAL FILE INFO

		% This file is part of hyph-utf8 package and resulted from
		% semi-manual conversions of hyphenation patterns into UTF-8 in June 2008.
		%
		% Source: rohyphen.tex (1996-11-11)
		% Author: drian Rezus <adriaan at {sci,cs}.kun.nl>
		%
		% The above mentioned file should become obsolete,
		% and the author of the original file should preferaby modify this file instead.
		%
		% Modificatios were needed in order to support native UTF-8 engines,
		% but functionality (hopefully) didn't change in any way, at least not intentionally.
		% This file is no longer stand-alone; at least for 8-bit engines
		% you probably want to use loadhyph-foo.tex (which will load this file) instead.
		%
		% Modifications were done by Jonathan Kew, Mojca Miklavec & Arthur Reutenauer
		% with help & support from:
		% - Karl Berry, who gave us free hands and all resources
		% - Taco Hoekwater, with useful macros
		% - Hans Hagen, who did the unicodifisation of patterns already long before
		%               and helped with testing, suggestions and bug reports
		% - Norbert Preining, who tested & integrated patterns into TeX Live
		%
		% However, the "copyright/copyleft" owner of patterns remains the original author.
		%
		% The copyright statement of this file is thus:
		%
		%    Do with this file whatever needs to be done in future for the sake of
		%    "a better world" as long as you respect the copyright of original file.
		%    If you're the original author of patterns or taking over a new revolution,
		%    plese remove all of the TUG comments & credits that we added here -
		%    you are the Queen / the King, we are only the servants.
		%
		% If you want to change this file, rather than uploading directly to CTAN,
		% we would be grateful if you could send it to us (http://tug.org/tex-hyphen)
		% or ask for credentials for SVN repository and commit it yourself;
		% we will then upload the whole "package" to CTAN.
		%
		% Before a new "pattern-revolution" starts,
		% please try to follow some guidelines if possible:
		%
		% - \lccode is *forbidden*, and I really mean it
		% - all the patterns should be in UTF-8
		% - the only "allowed" TeX commands in this file are: \patterns, \hyphenation,
		%   and if you really cannot do without, also \input and \message
		% - in particular, please no \catcode or \lccode changes,
		%   they belong to loadhyph-foo.tex,
		%   and no \lefthyphenmin and \righthyphenmin,
		%   they have no influence here and belong elsewhere
		% - \begingroup and/or \endinput is not needed
		% - feel free to do whatever you want inside comments
		%
		% We know that TeX is extremely powerful, but give a stupid parser
		% at least a chance to read your patterns.
		%
		% For more unformation see
		%
		%    http://tug.org/tex-hyphen
		%
		%------------------------------------------------------------------------------
		%
		%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		%% ROHYPHEN.TEX, version 1.1 <29.10.1996> R [7.11.1996]  %%
		%% (C) 1995-1996 Adrian Rezus [adriaan@{sci,cs}.kun.nl]  %%
		%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		%%
		%% Romanian TeX hyphenation table: NFSS 2 encoding, medium.
		%% Contents: 647 Romanian hyphen patterns, with diacritics.
		%%
		%% This file is part of the Romanian TeX system.
		%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		%% Romanian TeX, version 1.3R <29.10.1996>               %%
		%% (C) 1994-1996 Adrian Rezus                            %%
		%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		%% History:
		%% ROHYPHEN.TEX 1.0 <10.02.1995>: Plain TeX and LaTeX 2.09.
		%% ROHYPHEN.TEX 1.1 <29.10.1996>: Plain TeX and LaTeX2e.
		%
		% -------------------------------------------------------------------

		% TODO: fix the notice below - it only holds for the old patterns

		% 	NB This file must be used in conjunction with either one of
		%
		%	(1)	ROMANIAN.TEX v1.2(R) [1994-1995] [(La)TeX] or
		%	(2)	ROMANIAN.STY v1.3R   [1996]      [(La)TeX(2e)]
		%
		%	NB Romanian has LR-HYPHEN-MINs [2 2] (like German)!
		%	NB Romanian has STRUCTURAL HYPHEN-AMBIGUA:
		%	   i.e., words that canNOT be hyphenated correctly without 
		%	   additional (e.g., semantic, stress-mark) information.
		%	--------------------------------------------------------
		%	The Romanian TeX encoding of the Romanian diacritics:
		%	--------------------------------------------------------
		%	Romanian TeX 	DQ-macro encodings	= (La)TeX macros
		%	--------------------------------------------------------
		%	ă = \u{a}			[-]  \u{A} [not encoded]
		%	â = \^{a}			[-]  \^{A} [not encoded]
		%	î = \^{\i}			"I = \^{I}
		%	ș = \c{s}			"S = \c{S}
		%	ț = \c{t}			"T = \c{T}
		%	-------------------------------------------------------------
		%	NB Romanian \^{a} behaves like \^{\i} as regards hyphenation.
		%	NB The capital \u{A} and \^{A} are rare in script; as such,
		%	   they occur only in records of the Romanian substandard. 
		% -------------------------------------------------------------------
		%
		% original patterns generated by PatGen2-output hyphen-level 9: do NOT modify the list by hand!


//============================================================================================================	
	
*/

$patgenLanguage = "Romanian";

$patgenExceptions = array();

$patgenMaxSeg = 7;

$patgen = array('begin'=>array("aic"=>"0300","anis"=>"04300","az"=>"020","cre"=>"0001","deaj"=>"00200","dez"=>"0021","g"=>"04","ia"=>"020","ie"=>"020","iț"=>"030","iu"=>"043","iv"=>"030","îm"=>"040","n"=>"02","ni"=>"002","p"=>"04","preș"=>"00030","s"=>"04","ș"=>"04","ui"=>"040","uni"=>"0500","z"=>"02"),'end'=>array("an"=>"200","ăti"=>"0200","b"=>"20","bia"=>"0020","bține"=>"000400","c"=>"40","chi"=>"2000","ci"=>"200","d"=>"40","f"=>"20","fi"=>"200","g"=>"20","ghi"=>"2000","gi"=>"200","h"=>"20","hi"=>"200","i"=>"40","j"=>"20","ji"=>"200","l"=>"40","li"=>"400","m"=>"20","mi"=>"400","n"=>"40","ni"=>"400","obi"=>"0200","omedie"=>"0000020","orte"=>"00200","p"=>"20","pi"=>"200","pie"=>"0030","pți"=>"0400","r"=>"40","ri"=>"400","s"=>"40","sc"=>"400","see"=>"0040","ș"=>"40","și"=>"400","ști"=>"4000","t"=>"40","ti"=>"400","tii"=>"3000","tî"=>"200","tru"=>"3000","ț"=>"20","ți"=>"200","ția"=>"0030","u"=>"60","ua"=>"020","v"=>"20","vi"=>"200","x"=>"20","z"=>"20","zi"=>"200"),'all'=>array("a"=>"01","acă"=>"2000","achi"=>"00005","ae"=>"030","afo"=>"0003","aia"=>"0320","aie"=>"0320","ail"=>"0300","ais"=>"0032","aiu"=>"0300","alie"=>"00006","alt"=>"2000","am"=>"020","an"=>"020","ane"=>"0520","anie"=>"00020","aniș"=>"00034","ans"=>"0040","anu"=>"2000","anz"=>"0020","aog"=>"0020","atia"=>"00040","atr"=>"2000","atu"=>"0540","ața"=>"2000","ață"=>"2000","au"=>"200","aua"=>"0300","aud"=>"0300","aug"=>"0300","aul"=>"0300","aun"=>"0300","aur"=>"0300","aus"=>"0300","aute"=>"03000","auț"=>"0320","auz"=>"0300","ă"=>"21","ăi"=>"030","ăie"=>"0020","ăm"=>"022","ănu"=>"0003","ărgi"=>"00005","ăș"=>"030","ășt"=>"0430","ătie"=>"00040","ău"=>"030","ăv"=>"030","ăzi"=>"0200","b"=>"10","baț"=>"0020","bănu"=>"00005","bc"=>"200","bd"=>"200","biat"=>"00200","bie"=>"0020","bii"=>"3000","bl"=>"020","blim"=>"34000","blu"=>"0400","bo"=>"001","boric"=>"003000","bs"=>"200","bt"=>"200","bț"=>"200","bu"=>"003","c"=>"10","caut"=>"00300","căc"=>"0020","cătu"=>"00005","cc"=>"200","cea"=>"0020","ceț"=>"0020","ciale"=>"003000","cio"=>"0020","cis"=>"0002","cisp"=>"00300","ciza"=>"00002","cl"=>"040","cm"=>"200","cn"=>"250","copiată"=>"00000200","coț"=>"0020","cs"=>"200","ct"=>"200","cț"=>"200","cuim"=>"00300","cul"=>"3000","cuț"=>"0020","cv"=>"200","d"=>"10","dam"=>"0040","daț"=>"0020","dc"=>"200","desc"=>"00400","dezin"=>"000300","dian"=>"00200","diată"=>"000200","dj"=>"200","dm"=>"200","dn"=>"210","doil"=>"00400","du"=>"300","eac"=>"0100","eaj"=>"0100","eal"=>"0100","eaș"=>"0100","eat"=>"0100","eaț"=>"0020","eav"=>"0100","ebui"=>"00050","ec"=>"200","ecia"=>"00020","eclare"=>"0000200","ediulu"=>"0004000","ee"=>"030","eea"=>"0020","efa"=>"1000","eh"=>"010","eia"=>"0320","eie"=>"0320","eii"=>"0300","eil"=>"0300","eim"=>"0300","ein"=>"0300","eio"=>"0320","eis"=>"0332","eit"=>"0300","eiu"=>"0340","eî"=>"010","el"=>"200","em"=>"020","emon"=>"00005","en"=>"200","ene"=>"0500","eo"=>"011","eon"=>"0300","er"=>"010","era"=>"2000","eră"=>"2000","erc"=>"2000","es"=>"220","esco"=>"00300","esti"=>"00500","eș"=>"200","eși"=>"0300","etanț"=>"000040","eț"=>"200","eu"=>"030","euș"=>"0050","evit"=>"10000","ex"=>"020","ez"=>"200","eză"=>"0005","ezia"=>"00030","ezo"=>"0210","f"=>"14","fa"=>"300","făș"=>"3000","fie"=>"0030","fo"=>"300","ft"=>"200","ftu"=>"0500","g"=>"12","găț"=>"0030","gl"=>"040","gm"=>"230","gn"=>"230","gon"=>"0050","gu"=>"303","gv"=>"230","hia"=>"0020","hic"=>"0030","hiu"=>"0040","hn"=>"210","i"=>"21","iac"=>"3200","iag"=>"0034","iai"=>"0200","iaș"=>"0200","iaț"=>"0020","ică"=>"0300","ied"=>"0200","iia"=>"0300","iie"=>"0300","iii"=>"0300","iil"=>"0300","iin"=>"0300","iir"=>"0300","iit"=>"0300","iitură"=>"0000200","iî"=>"020","ila"=>"4000","ile"=>"0300","ilo"=>"0300","imateri"=>"00000006","in"=>"020","ined"=>"04100","ingă"=>"00200","inții"=>"000040","inv"=>"3000","iod"=>"0300","ioni"=>"03000","ioț"=>"0020","ipă"=>"0005","is"=>"020","isf"=>"0030","isp"=>"4000","ișt"=>"0030","iti"=>"0500","iția"=>"00020","ițio"=>"03020","iua"=>"0300","iul"=>"0300","ium"=>"0300","iund"=>"03000","iunu"=>"03000","ius"=>"0300","iut"=>"0300","izv"=>"0030","î"=>"02","îd"=>"030","îe"=>"030","îlo"=>"0300","îna"=>"0003","înș"=>"0050","îri"=>"0300","îrî"=>"0300","îrș"=>"0050","îșt"=>"0030","ît"=>"030","îti"=>"0400","îț"=>"030","îți"=>"0400","îții"=>"05000","îz"=>"030","j"=>"10","jd"=>"200","jiț"=>"0020","jl"=>"200","ju"=>"040","jut"=>"0030","k"=>"10","l"=>"10","larați"=>"0000002","lăti"=>"00200","lătu"=>"00005","lb"=>"200","lc"=>"200","ld"=>"200","lea"=>"0020","lf"=>"200","lg"=>"200","lia"=>"0030","lie"=>"0030","lio"=>"0030","lm"=>"200","ln"=>"250","lp"=>"200","ls"=>"200","lș"=>"230","lt"=>"200","lț"=>"200","lu"=>"300","lv"=>"200","m"=>"10","ma"=>"300","mă"=>"300","mb"=>"200","mblîn"=>"000003","me"=>"300","mez"=>"0020","mf"=>"200","mi"=>"300","miț"=>"0020","mî"=>"300","mn"=>"210","mo"=>"300","mon"=>"0004","mp"=>"200","ms"=>"232","mt"=>"200","mț"=>"200","mu"=>"300","muț"=>"0020","mv"=>"200","na"=>"300","nad"=>"4100","nain"=>"00300","nă"=>"300","nc"=>"200","ncis"=>"02000","nciz"=>"02000","nd"=>"200","ne"=>"300","neab"=>"00100","nean"=>"00100","neap"=>"00100","nef"=>"4000","neg"=>"4100","nes"=>"0032","nevi"=>"40000","nex"=>"4100","ng"=>"200","ngăt"=>"00300","ni"=>"300","niez"=>"00300","nî"=>"300","nj"=>"030","nn"=>"010","no"=>"300","noș"=>"0040","nr"=>"010","ns"=>"232","nsf"=>"0030","nsî"=>"0400","nspo"=>"00300","nș"=>"032","nși"=>"0400","nt"=>"200","nti"=>"0500","ntu"=>"0540","nț"=>"200","nu"=>"500","nua"=>"0030","nuă"=>"0030","num"=>"0050","nus"=>"0032","nz"=>"200","oag"=>"0100","oal"=>"0200","oca"=>"2000","ocui"=>"00050","od"=>"200","odia"=>"00020","oe"=>"030","oi"=>"032","oiecti"=>"0000002","oisp"=>"00320","omn"=>"0040","on"=>"200","oo"=>"010","opie"=>"00030","opla"=>"00002","oplagi"=>"0000002","ora"=>"0100","oră"=>"0100","orc"=>"0020","ore"=>"0100","ori"=>"0100","oric"=>"02000","orî"=>"0100","oro"=>"0100","oru"=>"0100","osti"=>"00500","oși"=>"0300","otați"=>"000004","oti"=>"0500","otod"=>"00300","ou"=>"030","p"=>"12","pa"=>"300","părț"=>"00030","pc"=>"230","pecți"=>"000002","peț"=>"0020","pie"=>"0020","piez"=>"00300","pio"=>"0030","piț"=>"0020","piz"=>"0020","pl"=>"040","poș"=>"0040","poț"=>"0020","ps"=>"230","pș"=>"230","pt"=>"230","pț"=>"230","pub"=>"0034","purie"=>"000020","puș"=>"0040","rb"=>"200","rc"=>"200","rd"=>"200","re"=>"020","rebi"=>"00200","recizi"=>"0000002","rescr"=>"003200","reși"=>"00400","rf"=>"200","rg"=>"200","rh"=>"210","ria"=>"0030","riali"=>"004000","rieț"=>"00300","riez"=>"00300","rimi"=>"00500","riun"=>"20300","riv"=>"0030","rk"=>"200","rl"=>"200","rm"=>"200","rn"=>"210","rnaț"=>"00020","rografi"=>"00000006","rp"=>"200","rr"=>"210","rs"=>"202","rsp"=>"0300","rst"=>"0300","rș"=>"230","rt"=>"200","rtuale"=>"0000200","rț"=>"200","ruil"=>"00300","rusp"=>"00300","rv"=>"200","rz"=>"200","s"=>"10","sa"=>"500","să"=>"500","săm"=>"0040","săș"=>"0040","sc"=>"200","sco"=>"3200","se"=>"300","sea"=>"0020","ses"=>"0002","sesp"=>"00300","seș"=>"0040","sf"=>"420","sfî"=>"5000","si"=>"300","sip"=>"0030","sî"=>"300","sl"=>"340","sm"=>"400","sn"=>"010","so"=>"300","soric"=>"003000","sp"=>"200","st"=>"200","sto"=>"0003","su"=>"500","suț"=>"0020","ș"=>"20","șa"=>"300","șaț"=>"0020","șă"=>"302","șe"=>"300","și"=>"100","șii"=>"5000","șil"=>"5000","șin"=>"3000","șî"=>"300","șn"=>"450","șnu"=>"0005","șo"=>"300","șp"=>"020","ști"=>"0200","ștr"=>"4300","șu"=>"300","t"=>"12","taut"=>"00300","tc"=>"230","td"=>"230","tea"=>"0020","teni"=>"00500","terială"=>"00006000","tesp"=>"00320","tf"=>"230","tia"=>"0030","tie"=>"0030","til"=>"3000","tin"=>"3000","tiț"=>"0020","tl"=>"040","tm"=>"230","tol"=>"3000","tor"=>"3000","toto"=>"00200","trul"=>"30000","truo"=>"30000","ts"=>"432","tt"=>"230","tua"=>"0030","tuim"=>"00300","tun"=>"4300","tuș"=>"0040","tz"=>"430","ț"=>"10","ța"=>"300","ță"=>"300","țeț"=>"0020","ția"=>"3000","ție"=>"3000","ții"=>"3000","țil"=>"3000","țiț"=>"0020","țiu"=>"3000","țu"=>"003","țui"=>"0050","u"=>"21","uad"=>"0200","uau"=>"0300","uă"=>"003","uăs"=>"0002","ubia"=>"02000","ubl"=>"0230","ubo"=>"0210","ubs"=>"0032","ue"=>"030","ugu"=>"4000","uia"=>"0320","uie"=>"0320","uin"=>"0300","uir"=>"0300","uis"=>"0300","uit"=>"0300","uiț"=>"0320","uiz"=>"0300","ul"=>"020","ula"=>"0300","ulă"=>"0300","ule"=>"0300","ulii"=>"03000","ulî"=>"0300","ulo"=>"0300","umir"=>"00050","urz"=>"0020","us"=>"020","uspr"=>"00200","ust"=>"0400","uș"=>"030","ușt"=>"0400","uto"=>"0200","utor"=>"30000","uui"=>"0300","uum"=>"0300","v"=>"10","veni"=>"00500","veț"=>"0020","vez"=>"0020","viț"=>"0020","vn"=>"210","vorbito"=>"00000002","vr"=>"300","x"=>"10","xa"=>"300","xă"=>"300","xe"=>"300","xez"=>"0020","xi"=>"300","xo"=>"300","xu"=>"300","z"=>"10","zaț"=>"0020","zb"=>"200","zg"=>"220","zian"=>"00200","ziar"=>"00200","zii"=>"3000","zil"=>"3000","zm"=>"040","zn"=>"210","zol"=>"3200","zon"=>"3000","zuț"=>"0020","zv"=>"220","zvă"=>"0300"));

?>