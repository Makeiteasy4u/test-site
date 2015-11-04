<?php
$lang['addarticle']='Haber Ekle';
$lang['addcategory']='Kategori Ekle';
$lang['addfielddef']='Alan Ekle';
$lang['addnewsitem']='Haber &Ouml;ğesi Ekle';
$lang['allcategories']='T&uuml;m Kategoriler';
$lang['allentries']='T&uuml;m Girdiler';
$lang['allow_summary_wysiwyg']='&Ouml;zet alanında WYSIWYG editore izin ver';
$lang['anonymous']='Anonim';
$lang['apply']='Uygula';
$lang['approve']='Durumu &#039;Yayınlandı&#039; olarak değiştir';
$lang['areyousure']='Silmek istediğinizden emin misiniz?';
$lang['areyousure_deletemultiple']='Se&ccedil;ilen haberleri kalıcı olarak silmek istediğinize emin misiniz? Bu durum geri alınamaz!';
$lang['article']='Makale';
$lang['articleadded']='Haber başarılı olarak eklendi.';
$lang['articledeleted']='Haber başarılı olarak silindi.';
$lang['articles']='Haberler';
$lang['articleupdated']='Haber başarılı olarak g&uuml;ncellendi.';
$lang['author']='Yazar';
$lang['author_label']='G&ouml;nderen:';
$lang['browsecattemplate']='Kategori şablonları';
$lang['cancel']='Vazge&ccedil;';
$lang['categories']='Kategoriler';
$lang['category']='Kategori';
$lang['category_label']='Kategori:';
$lang['categoryadded']='Kategori başarılı olarak eklendi.';
$lang['categorydeleted']='Kategori başarılı olarak silindi.';
$lang['categoryupdated']='Kategori başarılı olarak g&uuml;ncellendi.';
$lang['content']='İ&ccedil;erik';
$lang['customfields']='Alan Tanımlamaları';
$lang['dateformat']='%s ge&ccedil;erli bir yyyy-mm-dd hh:mm:ss bi&ccedil;imi değil';
$lang['default_category']='Varsayılan kategori';
$lang['default_templates']='Varsayılan Şablonlar';
$lang['delete']='Sil';
$lang['delete_selected']='Se&ccedil;ilen Haberleri Sil';
$lang['deprecated']='desteklenmiyor';
$lang['description']='Haber girdileri ekle, d&uuml;zenle ve sil';
$lang['detail_page']='Ayrıntı Sayfası';
$lang['detail_template']='Ayrıntı Şablonu';
$lang['detailtemplate']='Ayrıntı Şablonu';
$lang['detailtemplateupdated']='D&uuml;zenlenen Ayrıntı Şablonu başarılı olarak veritabanına kaydedildi.';
$lang['displaytemplate']='Şablonu G&ouml;ster';
$lang['down']='Aşağı';
$lang['draft']='Taslak';
$lang['edit']='D&uuml;zenle';
$lang['editfielddef']='Alan Tanımı D&uuml;zenle';
$lang['enddate']='Bitiş Tarihi';
$lang['endrequiresstart']='Bitiş tarihihi girmek başlangı&ccedil; tarihini girmeyi de gerektirir';
$lang['entries']='%s Girdi';
$lang['error_duplicatename']='Bu ada sahip bir &ouml;ğe zaten var';
$lang['error_filesize']='Y&uuml;klenen dosyanın boyutu izin verilen dosya boyutundan fazla';
$lang['error_insufficientparams']='Yetersiz (veya boş) parametre';
$lang['error_invaliddates']='Bir yada daha fazla tarih yanlış girirldi';
$lang['error_invalidfiletype']='Bu dosya tipini y&uuml;kleyemezsiniz';
$lang['error_invalidurl']='Ge&ccedil;ersiz URL <em> (zaten kullanılmış veya ge&ccedil;ersiz karakter i&ccedil;eriyor) </ em>';
$lang['error_mkdir']='Klas&ouml;r oluşturulamadı: %s';
$lang['error_movefile']='Dosya oluşturulamadı: %s';
$lang['error_noarticlesselected']='Hi&ccedil; Haber Se&ccedil;ilmedi';
$lang['error_templatenamexists']='Şablon adı zaten var';
$lang['error_upload']='Dosya y&uuml;kleme hatası oluştu';
$lang['eventdesc-NewsArticleAdded']='Haber eklendiğinde g&ouml;nderildi.';
$lang['eventdesc-NewsArticleDeleted']='Haber silindiğinde g&ouml;nderildi.';
$lang['eventdesc-NewsArticleEdited']='Haber d&uuml;zenlendiğinde g&ouml;nderildi.';
$lang['eventdesc-NewsCategoryAdded']='Kategori eklendiğinde g&ouml;nderildi.';
$lang['eventdesc-NewsCategoryDeleted']='Kategori silindiğinde g&ouml;nderildi.';
$lang['eventdesc-NewsCategoryEdited']='Kategori d&uuml;zenlendiğinde g&ouml;nderildi.';
$lang['eventhelp-NewsArticleAdded']='<p>Sent when an article is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
<li>\&quot;category_id\&quot; - Id of the category for this article</li>
<li>\&quot;title\&quot; - Title of the article</li>
<li>\&quot;content\&quot; - Content of the article</li>
<li>\&quot;summary\&quot; - Summary of the article</li>
<li>\&quot;status\&quot; - Status of the article (&quot;draft&quot; or &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Date the article should start being displayed</li>
<li>\&quot;end_time\&quot; - Date the article should stop being displayed</li>
<li>\&quot;useexp\&quot; - Whether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventhelp-NewsArticleDeleted']='<p>Sent when an article is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
</ul>
';
$lang['eventhelp-NewsArticleEdited']='<p>Sent when an article is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
<li>\&quot;category_id\&quot; - Id of the category for this article</li>
<li>\&quot;title\&quot; - Title of the article</li>
<li>\&quot;content\&quot; - Content of the article</li>
<li>\&quot;summary\&quot; - Summary of the article</li>
<li>\&quot;status\&quot; - Status of the article (&quot;draft&quot; or &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Date the article should start being displayed</li>
<li>\&quot;end_time\&quot; - Date the article should stop being displayed</li>
<li>\&quot;useexp\&quot; - Whether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventhelp-NewsCategoryAdded']='<p>Sent when a category is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventhelp-NewsCategoryDeleted']='<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the deleted category </li>
<li>\&quot;name\&quot; - Name of the deleted category</li>
</ul>
';
$lang['eventhelp-NewsCategoryEdited']='<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
<li>\&quot;origname\&quot; - The original name of the news category</li>
</ul>
';
$lang['expired']='S&uuml;resi Dolmuş';
$lang['expired_searchable']='S&uuml;resi bitmiş haberler arama sonu&ccedil;larında &ccedil;ıkabilsin';
$lang['expiry']='S&uuml;resi';
$lang['expiry_date_asc']='Ger&ccedil;erlilik Tarihi Artan';
$lang['expiry_date_desc']='Ge&ccedil;erlilik Tarihi Azalan';
$lang['extra']='Ekstra';
$lang['extra_label']='Ekstra:';
$lang['fielddef']='Alan Tanımlama';
$lang['fielddefadded']='Alan Tanımı Eklendi';
$lang['fielddefdeleted']='Tanımlanan Alan Silindi';
$lang['fielddefupdated']='Alan Tanımı G&uuml;ncellendi';
$lang['file']='Dosya';
$lang['filter']='S&uuml;z';
$lang['firstpage']='<<';
$lang['formtemplate']='Form Şablonları';
$lang['help']='	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Template variables</h3>
	<ul>
		<li><b>itemcount</b> - The number of news articles to be shown.</li>
		<li><b>entry->authorname</b> - The full name of the the author including First and Last name.</li>
	</ul>
	<h3>Security</h3>
	<p>The user must belong to a group with the &#039;Modify News&#039; permission in order to add, edit, or delete News entries.</p>
	<p>In order to edit the layout templates, the user must belong to a group with the &#039;Modify Templates&#039; permission.</p>
	<p>In order to edit the global news preferences, the user must belong to a group with the &#039;Modify Site Preferences&#039; permission.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is with the {news} wrapper tag (wraps the module in a tag, to simplify the syntax).  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{news number=&#039;5&#039;}</code></p>';
$lang['help_pagelimit']='Maximum number of items to display (per page).  If this parameter is not supplied all matching items will be displayed.  If it is, and there are more items available than specified in the pararamter, text and links will be supplied to allow scrolling through the results';
$lang['helpaction']='Override the default action.  Possible values are &#039;default&#039; to display the summary view, and &#039;fesubmit&#039; to display the frontend form for allowing users to submit news articles on the front end.';
$lang['helpbrowsecat']='Taranabilir kategori listesini g&ouml;ster.';
$lang['helpcategory']='Only display items for that category. <b>Use * after the name to show children.</b>  Multiple categories can be used if separated with a comma. Leaving empty, will show all categories.';
$lang['helpdetailtemplate']='Use a separate template for displaying the article detail.  It have to live in modules/News/templates.';
$lang['helpmoretext']='Text to display at the end of a news item if it goes over the summary length.  Defaults to &quot;more...&quot;';
$lang['helpnumber']='G&ouml;sterilecek &ouml;ğe sayısı =- boş bırakılırsa t&uuml;m &ouml;ğeler g&ouml;sterilir.';
$lang['helpshowall']='Bitiş tarihine bakılmaksızın t&uuml;m haberleri g&ouml;ster';
$lang['helpshowarchive']='Sadece s&uuml;resi ge&ccedil;miş haberleri g&ouml;ster.';
$lang['helpsortby']='Field to sort by.  Options are: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Defaults to &quot;news_date&quot;.';
$lang['helpstart']='Başlangı&ccedil; &ouml;ğe sayısı -- boş bırakılırsa ilk &ouml;ğeden başlanır.';
$lang['helpsummarytemplate']='Use a separate template for displaying the article summary.  It have to live in modules/News/templates.';
$lang['info_maxlength']='Maksimum uzunluğu yalnızca metin giriş alanları i&ccedil;in ge&ccedil;erlidir.';
$lang['info_sysdefault']='<em>(the content used by default when a new template is created)</em>';
$lang['info_sysdefault2']='<strong>Note:</strong> This tab contains text areas to allow you to edit a set of templates that are displayed when you create a &#039;new&#039; summary, detail, or form template.  Changing content in this tab, and clicking &#039;submit&#039; will <strong>not effect any current displays</strong>.';
$lang['lastpage']='>>';
$lang['maxlength']='Maksimum Uzunluk';
$lang['more']='Devamı';
$lang['moretext']='Fazla yazı';
$lang['name']='İsim';
$lang['nameexists']='Tanımlı alan adı zaten var';
$lang['needpermission']='Bu işlemi yapmak i&ccedil;in &#039;%s&#039; yetkinizin olması gerekir.';
$lang['newcategory']='Yeni Kategori';
$lang['news']='Haberler';
$lang['news_return']='Geri d&ouml;n';
$lang['nextpage']='>';
$lang['nocategorygiven']='Kategori girilmemiş';
$lang['nocontentgiven']='İ&ccedil;erik girilmemiş';
$lang['noitemsfound']='Kategori i&ccedil;in <strong>hi&ccedil;</strong> &ouml;ğe bulunamadı: %s';
$lang['nonamegiven']='İsim girilmemiş';
$lang['none']='Yok';
$lang['nopostdategiven']='G&ouml;nderme Tarihi girilmemiş';
$lang['notanumber']='Maksimum Uzunluk Sayı Değil';
$lang['note']='<em>Not:</em> Tarihler &#039;yyyy-mm-dd hh:mm:ss&#039; bi&ccedil;iminde olmalıdır.';
$lang['notify_n_draft_items']='%s sayıda yayınalnmamış haber var';
$lang['notify_n_draft_items_sub']='%d Haber Yazıları(s)';
$lang['notitlegiven']='Başlık girilmemiş';
$lang['numbertodisplay']='G&ouml;sterilecek adet (boş bırakılırsa t&uuml;m kayıtlar g&ouml;sterilir)';
$lang['options']='Se&ccedil;enekler';
$lang['optionsupdated']='Se&ccedil;enekler başarılı olarak g&uuml;ncellendi.';
$lang['post_date_asc']='G&ouml;nderim Tarihi Artan';
$lang['post_date_desc']='G&ouml;nderim Tarihi Azalan';
$lang['postdate']='G&ouml;nderme Tarihi';
$lang['postinstall']='Make sure to set the &quot;Modify News&quot; permission on users who will be administering News items.';
$lang['preview']='&Ouml;nizleme';
$lang['prevpage']='<';
$lang['print']='Yazdır';
$lang['prompt_default']='Varsayılan';
$lang['prompt_name']='Adı';
$lang['prompt_newtemplate']='Yeni Şablon Yarat';
$lang['prompt_of']='-';
$lang['prompt_page']='Sayfa';
$lang['prompt_pagelimit']='Sayfa Limiti';
$lang['prompt_sorting']='Sırala';
$lang['prompt_template']='Şablon Kaynağı';
$lang['prompt_templatename']='Şablon Adı';
$lang['public']='Genel';
$lang['published']='Yayınlandı';
$lang['reassign_category']='Kategori değiştir';
$lang['removed']='Geri Alındı';
$lang['resettodefault']='Varsayılan Ayarlara Geri D&ouml;n';
$lang['restoretodefaultsmsg']='Bu işlem şablon i&ccedil;eriğini sistem varsayılanlarına &ccedil;evirecektir. Devam etmek istediğinizden emin misiniz?';
$lang['revert']='Durumu &#039;Taslak&#039; olarak değiştir';
$lang['select']='Se&ccedil;iniz';
$lang['selectcategory']='Kategori Se&ccedil;in';
$lang['showchildcategories']='Alt kategorileri g&ouml;ster';
$lang['sortascending']='B&uuml;y&uuml;kten k&uuml;&ccedil;&uuml;ğe sırala';
$lang['startdate']='Başlangı&ccedil; Tarihi';
$lang['startdatetoolate']='Başlangı&ccedil; ​​Tarihi bitiş tarihinden sonra olamaz';
$lang['startoffset']='n&#039;inci &ouml;ğeden başlayarak g&ouml;ster';
$lang['startrequiresend']='Başlangı&ccedil; tarihini girmek bitiş tarihini de girmeyi gerektirir';
$lang['status']='Durum';
$lang['status_asc']='Duruma G&ouml;re Azalan';
$lang['status_desc']='Duruma G&ouml;re Azalan';
$lang['subject_newnews']='Yeni bir haber makalesi g&ouml;nderildi';
$lang['submit']='G&ouml;nder';
$lang['summary']='&Ouml;zet';
$lang['summarytemplate']='&Ouml;zet Şablonu';
$lang['summarytemplateupdated']='Haber &Ouml;zet Şablonu başarılı olarak g&uuml;ncellendi.';
$lang['sysdefaults']='Varsayılanlara d&ouml;n';
$lang['template']='Şablon';
$lang['title']='Başlık';
$lang['title_asc']='Başlığa G&ouml;re Artan';
$lang['title_available_templates']='Kullanılabilir Şablonlar';
$lang['title_desc']='Başlığa G&ouml;re Azalan';
$lang['title_detail_returnid']='Ayrıntılı g&ouml;r&uuml;n&uuml;m i&ccedil;in varsayılan sayfa';
$lang['title_detail_settings']='Ayrıntılı G&ouml;r&uuml;n&uuml;m Ayarları';
$lang['title_detail_sysdefault']='Varsayılan Ayrıntı Şablonu';
$lang['title_detail_template']='Ayrıntı Şablon Edit&ouml;r&uuml;';
$lang['title_fesubmit_settings']='&Ouml;n sayfa ekleme ayarları';
$lang['title_filter']='Filtreler';
$lang['title_form_sysdefault']='Varsayılan Form Şablonu';
$lang['title_form_template']='Form Şablonu Edit&ouml;r&uuml;';
$lang['title_notification_settings']='Bilgilendirme Ayarları';
$lang['title_submission_settings']='Haber Giriş Ayarları';
$lang['title_summary_sysdefault']='Varsayılan &Ouml;zet Şablonu';
$lang['title_summary_template']='&Ouml;zet Şablon Edit&ouml;r&uuml;';
$lang['type']='Tip';
$lang['unknown']='Bilinmiyor';
$lang['unlimited']='Limitsiz';
$lang['up']='Yukarı';
$lang['uploadscategory']='Y&uuml;klemeler Kategorisi';
$lang['useexpiration']='S&uuml;resi ge&ccedil;me tarihini kullan';
?>