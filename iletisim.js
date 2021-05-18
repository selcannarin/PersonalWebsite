function isValid(frm)
{
    var kadi = frm.kadi.value;
    var sifre = frm.sifre.value;
    var email = frm.email.value;
    var atpos=email.indexOf("@");
    var dotpos=email.lastIndexOf(".");
    var telNo=frm.telNo.value;
    var dogumTarihi=frm.dogumTarihi.value;
    var yorum=frm.yorum.value;
    var ad=frm.ad.value;
    var soyad=frm.soyad.value;
    var cinsiyet=frm.cinsiyet.value;
    var secenek=frm.secenek.value;
    var check=frm.check.value;
    

    if ( kadi==null || kadi=="" || kadi.length < 4 )
    {
        alert("Kullanıcı adı 4 karakterden az olamaz");
        return false;
    }

    if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )
    {
        alert("Geçerli email adresi girin");
        return false;
    }    
    if ( ad==null || ad==""  )
    {
        alert("Bu kısım boş olamaz.");
        return false;
    }
    if ( soyad==null || soyad==""  )
    {
        alert("Bu kısım boş olamaz.");
        return false;
    }

    if ( sifre == null || sifre == ""||sifre.length<4 )
    {
        alert("Şifre 4 karakterden az olamaz.");
        return false;
    }

    if ( telNo == null || telNo == ""||telNo.length<10 )
    {
        alert("Telefon numarası 10 sayıdan az olamaz.");
        return false;
    }

    

    if ( dogumTarihi==null || dogumTarihi=="" )
    {
        alert("Bu kısım boş olamaz.");
        return false;
    }
    if ( cinsiyet==null || cinsiyet=="" )
    {
        alert("Bu kısım boş olamaz.");
        return false;
    }

    if ( check==null || check=="" )
    {
        alert("Bu kısım boş olamaz.");
        return false;
    }
    if ( secenek==null ||secenek=="" )
    {
        alert("Bu kısım boş olamaz.");
        return false;
    }

    if ( yorum==null ||yorum=="" )
    {
        alert("Bu kısım boş olamaz.");
        return false;
    }

    
    
    return true;
}    
    
