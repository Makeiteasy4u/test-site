<?php
$lang['abouttxt']='Predstavitev';
$lang['accessdenied']='Dostop zavrnjen. Prosimo, preverite va&scaron;e pravice.';
$lang['action_activated']='Modul %s je bil aktiviran.';
$lang['action_installed']='Modul %s je bila name&scaron;čen z naslednjim(i) sporočilom(i): %s';
$lang['action_upgraded']='Modul %s je bil posodobljen';
$lang['admindescription']='Orodje za prenos in namestitev modulov iz oddaljenih strežnikov.';
$lang['advancedsearch_help']='Specify words to include or exclude from the search using a + or -, surround exact phrases with quotes.  i.e:  &quot;+red -apple +&quot;some text&quot;';
$lang['all_modules_up_to_date']='Trenutno ni novej&scaron;ih modulov na voljo v repozitoriju';
$lang['available_updates']='Moduli na voljo za posodobitev';
$lang['availablemodules']='Trenuten status modulov, ki so na voljo v trenutnem repozitoriju';
$lang['availmodules']='Moduli na voljo';
$lang['back_to_module_manager']='&laquo; vrni se v Module Manager';
$lang['cantdownload']='Ne morem prenesti';
$lang['compatibility_disclaimer']='Module, ki so tu prikazani, prispevajo razvijalci sistema CMS ter neodvisni posamezniki. Ne jamčimo, da so vsi moduli testirani, kompatibilni z va&scaron;im sistemom ali pa da v celoti delujejo. Svetujemo vam, da preberete informacije, ki jih najdete na povezavah pomoč in predstavitev pri posameznem modulu, preden ta modul namestite.';
$lang['depend_activate']='Modul %s mora biti aktiviran.';
$lang['depend_install']='Modul %s (različica %s ali kasneje) je treba namestiti.';
$lang['depend_upgrade']='Modul %s je treba nadgraditi na verzijo %s.';
$lang['dependstxt']='Odvisnosti';
$lang['download']='Prenesi in namesti';
$lang['error']='Napaka!';
$lang['error_checksum']='Checksum napaka. To najverjetneje pomeni, da je datoteka po&scaron;kodovana. Do po&scaron;kodbe datoteke lahko pride pri nalaganju v repozitorij ali pa ob prenosu na va&scaron; strežnik.';
$lang['error_connectnomodules']='Povezava je bila uspe&scaron;no vzpostavljena v izbran repozitorij, vendar kaže, da ta repozitorij ne vsebuje nobenih modulov.';
$lang['error_downloadxml']='Problem v nalaganju XML datoteke: %s';
$lang['error_internal']='Notranja napaka ... Prosimo, sporočite problem, skrbniku sistema';
$lang['error_minimumrepository']='Različica v repozitoriju ni kompatibilna s tem upraviteljem modulov';
$lang['error_module_object']='Napaka: ne morem prenesti modula %s';
$lang['error_moduleinstallfailed']='Namestitev modula ni uspe&scaron;na';
$lang['error_nofilename']='Parameter filename ni podan';
$lang['error_nofilesize']='Parameter filesize ni podan';
$lang['error_nomatchingmodules']='Napaka: noben modul v repozitoriju ne ustreza';
$lang['error_nomodules']='Napaka: ne morem pridobiti seznama name&scaron;čenih modulov';
$lang['error_norepositoryurl']='URL repozitorija modulov ni bil določen';
$lang['error_noresults']='We expected some results to be available from queued operations, but none were found.  Please try to reproduce this experience, and provide sufficient information to support personell for diagnoses';
$lang['error_permissions']='<strong><em>OPOZORILO:</em></strong> Na mapi za namestitev modulov ni dovolj pravic za namestitev. Morda imate težave s PHP varnim načinom (safe_mode). Prosimo preverite, da je varni način onemogočen in da imate ustrezne pravice na datotečnem sistemu.';
$lang['error_request_problem']='Problem v komunikacijo z modulnim strežnikom ';
$lang['error_search']='Napaka v iskanju';
$lang['error_searchterm']='Navedite veljavno besedo za iskanje';
$lang['error_skipping']='Preskakuje namestitev/nadgradnjo %s zaradi napak pri vzpostavljanju odvisnosti. Oglejte si sporočilo zgoraj, in poskusite znova';
$lang['error_unsatisfiable_dependency']='Ne najde zahtevanega modula &quot;%s&quot; (različica %s ali kasneje) v skladi&scaron;ču. To neposredno zahteva %s; to lahko kaže na težave z različico tega modula v skladi&scaron;ču. Obrnite se na modula avtorja. Prekinja.';
$lang['error_upgrade']='Nadgradnja modula %s ni uspela!';
$lang['friendlyname']='Upravitelj modulov';
$lang['general_notice']='Prikazane različice predstavljajo najnovej&scaron;e XML datoteke, ki so naložene v va&scaron; izbran repozitorij (navadno CMS %s). To ne pomeni, da so to zares najnovej&scaron;e različice, ki so na voljo. Svetujemo vam, da preverite, ali obstajajo morda &scaron;e kak&scaron;ne novej&scaron;e različice teh modulov. Če uporabljate privzeti repozitorij to lahko storite tako, da vpi&scaron;ete naziv modula v iskalnik na %s in kliknete gumb &amp;quot;Files&amp;quot;.';
$lang['help']='<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using REST, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Extensions&#039; --&amp;gt; &#039;Module Manager&#039; --&amp;gt; &#039;Preferences&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &amp;copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com">&amp;lt;calguy1000@hotmail.com&amp;gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['helptxt']='Pomoč';
$lang['incompatible']='Ni kompatibilen';
$lang['info_disable_caching']='<strong>Not Recommended</strong>.  For performance reasons, ModuleManager will cache for (by default one hour) much of the information retrieved from the remote server ';
$lang['info_latestdepends']='When installing a module with dependencies, this option will make sure that the latest version of the dependency will be installed ';
$lang['install']='namestitev';
$lang['install_submit']='Namesti';
$lang['install_with_deps']='Oceni vse odvisnosti in namestite';
$lang['installed']='Modul različice %s name&scaron;čen.';
$lang['instcount']='Trenutno name&scaron;čeni moduli';
$lang['latestdepends']='Vedno namestite najnovej&scaron;e module';
$lang['mod_name_ver']='%s različica %s';
$lang['moddescription']='Klient za repozitorij modulov; modul omogoča predogled ter namestitev modulov iz oddaljenih strani brez potrebe po FTP povezavi ali ekstrahiranju paketov. XML datoteke modulov so prene&scaron;ene preko SOAP protokola, preverjene in avtomatično name&scaron;čene.';
$lang['msg_nodependencies']='Ta datoteka ni odvisna od drugih modulov';
$lang['nametext']='Naziv modula';
$lang['newerversion']='Name&scaron;čena je novej&scaron;a različica';
$lang['newversions']='Nadgradnje na voljo';
$lang['notice']='V vednost';
$lang['notice_depends']='%s je odvisno od naslednjih ukrepov. Klikni &quot;Namesti&quot; da greste naprej.';
$lang['onlynewesttext']='Prikaži samo najnovej&scaron;o različico';
$lang['operation_results']='Rezultati delovanja';
$lang['postinstall']='Upravitelj modulov je bil uspe&scaron;no name&scaron;čen';
$lang['postuninstall']='Upravitelj modulov je bil uspe&scaron;no odstranjen. Uporabniki nimajo več možnosti namestitve modulov iz oddaljenega repozitorija. Lokalne namestitve so &scaron;e vedno možne.';
$lang['preferences']='Nastavitve';
$lang['preferencessaved']='Nastavitve shranjene';
$lang['prompt_advancedsearch']='Napredno iskanje';
$lang['prompt_disable_caching']='Onemogoči predpomnenje zahtev iz strežnika';
$lang['prompt_dl_chunksize']='Velikost paketa prenosa (Kb)';
$lang['prompt_otheroptions']='Ostale možnosti';
$lang['prompt_repository_url']='URL naslov repozitorija modulov:';
$lang['prompt_resetcache']='Osveži lokalni predpomnilnik podatkov z repozitorija';
$lang['prompt_reseturl']='Ponastavi URL na privzeti';
$lang['prompt_settings']='Nastavitve';
$lang['really_uninstall']='Ste prepričani, da želite odstraniti? S tem boste zmanj&scaron;ali funkcionalnost sistema.';
$lang['repositorycount']='Najdeni moduli v repozitoriju';
$lang['reset']='Ponastavi';
$lang['search']='Iskanje';
$lang['search_input']='Polje za iskanje';
$lang['search_noresults']='Iskanje je uspelo, vendar ni rezultatov ki se ujemajo formuli';
$lang['search_results']='Rezultati iskanja';
$lang['searchterm']='Iskalni pojem';
$lang['sizetext']='Velikost (Kb)';
$lang['statustext']='Status/Akcija';
$lang['submit']='Po&scaron;lji';
$lang['text_dl_chunksize']='Največja velikost podatkov za prenos s strežnika v enem paketu (ob namestitvi modula)';
$lang['text_repository_url']='URL naslov naj bo v obliki  http://www.mycmssite.com/ModuleRepository/request/v2';
$lang['time_warning']='Seznam namestitev ima dva ali več modulov. Zavedajte se, da namestitev traja nekaj minut. Prosimo, bodite potrpežljivi!';
$lang['title_installation']='Namestitev';
$lang['title_installation_complete']='Namestitev je kompletna!';
$lang['uninstalled']='Modul odstranjen.';
$lang['unknown']='Neznano';
$lang['upgrade']='Posodobi';
$lang['upgrade_available']='Na voljo je nova različica (%s), vi uporabljate staro različico (%s)';
$lang['upgraded']='Modul nadgrajen na različico %s.';
$lang['uptodate']='Name&scaron;čen';
$lang['use_at_your_own_risk']='Uporaba na lastno odgovornost';
$lang['versionsformodule']='Različice modula %s na voljo';
$lang['vertext']='Različica';
$lang['xmltext']='XML datoteka';
$lang['yourversion']='Va&scaron;a različica';
?>