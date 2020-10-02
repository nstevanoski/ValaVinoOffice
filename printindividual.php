<?php
session_start();
include('security.php');
?>

<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <style type="text/css">
        ol.lst-kix_6ou024orqhig-5.start {
            counter-reset: lst-ctn-kix_6ou024orqhig-5 0
        }
        
        .lst-kix_6ou024orqhig-8>li:before {
            content: "" counter(lst-ctn-kix_6ou024orqhig-8, lower-roman) ". "
        }
        
        ol.lst-kix_6ou024orqhig-3.start {
            counter-reset: lst-ctn-kix_6ou024orqhig-3 0
        }
        
        .lst-kix_6ou024orqhig-5>li {
            counter-increment: lst-ctn-kix_6ou024orqhig-5
        }
        
        .lst-kix_6ou024orqhig-8>li {
            counter-increment: lst-ctn-kix_6ou024orqhig-8
        }
        
        .lst-kix_6ou024orqhig-1>li {
            counter-increment: lst-ctn-kix_6ou024orqhig-1
        }
        
        ol.lst-kix_6ou024orqhig-7.start {
            counter-reset: lst-ctn-kix_6ou024orqhig-7 0
        }
        
        .lst-kix_6ou024orqhig-1>li:before {
            content: "" counter(lst-ctn-kix_6ou024orqhig-1, lower-latin) ". "
        }
        
        .lst-kix_6ou024orqhig-0>li:before {
            content: "" counter(lst-ctn-kix_6ou024orqhig-0, decimal) ". "
        }
        
        ol.lst-kix_6ou024orqhig-1.start {
            counter-reset: lst-ctn-kix_6ou024orqhig-1 0
        }
        
        .lst-kix_6ou024orqhig-7>li {
            counter-increment: lst-ctn-kix_6ou024orqhig-7
        }
        
        .lst-kix_6ou024orqhig-4>li {
            counter-increment: lst-ctn-kix_6ou024orqhig-4
        }
        
        ol.lst-kix_6ou024orqhig-7 {
            list-style-type: none
        }
        
        .lst-kix_6ou024orqhig-6>li {
            counter-increment: lst-ctn-kix_6ou024orqhig-6
        }
        
        ol.lst-kix_6ou024orqhig-8 {
            list-style-type: none
        }
        
        ol.lst-kix_6ou024orqhig-4.start {
            counter-reset: lst-ctn-kix_6ou024orqhig-4 0
        }
        
        ol.lst-kix_6ou024orqhig-5 {
            list-style-type: none
        }
        
        ol.lst-kix_6ou024orqhig-6 {
            list-style-type: none
        }
        
        ol.lst-kix_6ou024orqhig-3 {
            list-style-type: none
        }
        
        ol.lst-kix_6ou024orqhig-4 {
            list-style-type: none
        }
        
        ol.lst-kix_6ou024orqhig-1 {
            list-style-type: none
        }
        
        ol.lst-kix_6ou024orqhig-2 {
            list-style-type: none
        }
        
        ol.lst-kix_6ou024orqhig-6.start {
            counter-reset: lst-ctn-kix_6ou024orqhig-6 0
        }
        
        ol.lst-kix_6ou024orqhig-0 {
            list-style-type: none
        }
        
        .lst-kix_6ou024orqhig-0>li {
            counter-increment: lst-ctn-kix_6ou024orqhig-0
        }
        
        ol.lst-kix_6ou024orqhig-2.start {
            counter-reset: lst-ctn-kix_6ou024orqhig-2 0
        }
        
        .lst-kix_6ou024orqhig-3>li {
            counter-increment: lst-ctn-kix_6ou024orqhig-3
        }
        
        .lst-kix_6ou024orqhig-2>li:before {
            content: "" counter(lst-ctn-kix_6ou024orqhig-2, lower-roman) ". "
        }
        
        .lst-kix_6ou024orqhig-3>li:before {
            content: "" counter(lst-ctn-kix_6ou024orqhig-3, decimal) ". "
        }
        
        .lst-kix_6ou024orqhig-5>li:before {
            content: "" counter(lst-ctn-kix_6ou024orqhig-5, lower-roman) ". "
        }
        
        ol.lst-kix_6ou024orqhig-8.start {
            counter-reset: lst-ctn-kix_6ou024orqhig-8 0
        }
        
        .lst-kix_6ou024orqhig-4>li:before {
            content: "" counter(lst-ctn-kix_6ou024orqhig-4, lower-latin) ". "
        }
        
        .lst-kix_6ou024orqhig-7>li:before {
            content: "" counter(lst-ctn-kix_6ou024orqhig-7, lower-latin) ". "
        }
        
        .lst-kix_6ou024orqhig-2>li {
            counter-increment: lst-ctn-kix_6ou024orqhig-2
        }
        
        .lst-kix_6ou024orqhig-6>li:before {
            content: "" counter(lst-ctn-kix_6ou024orqhig-6, decimal) ". "
        }
        
        ol.lst-kix_6ou024orqhig-0.start {
            counter-reset: lst-ctn-kix_6ou024orqhig-0 0
        }
        
        ol {
            margin: 0;
            padding: 0
        }
        
        table td,
        table th {
            padding: 0
        }
        
        .c13 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 75.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        
        .c19 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 64.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        
        .c24 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 66.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        
        .c18 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 234pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        
        .c23 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 57pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        
        .c11 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 58.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        
        .c9 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 63.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        
        .c15 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 81.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        
        .c25 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Arial";
            font-style: normal
        }
        
        .c4 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 9pt;
            font-family: "Arial";
            font-style: normal
        }
        
        .c0 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: left;
            height: 11pt
        }
        
        .c16 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Arial";
            font-style: normal
        }
        
        .c3 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 9pt;
            font-family: "Arial";
            font-style: normal
        }
        
        .c1 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: center
        }
        
        .c5 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        
        .c14 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: justify
        }
        
        .c2 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left;
            height: 11pt
        }
        
        .c17 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left
        }
        
        .c10 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: center
        }
        
        .c21 {
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }
        
        .c12 {
            background-color: #ffffff;
            max-width: 468pt;
            padding: 72pt 72pt 72pt 72pt
        }
        
        .c22 {
            font-size: 9pt;
            font-weight: 700
        }
        
        .c6 {
            padding: 0;
            margin: 0
        }
        
        .c20 {
            margin-left: 36pt;
            padding-left: 0pt
        }
        
        .c7 {
            height: 11pt
        }
        
        .c8 {
            height: 0pt
        }
        
        .title {
            padding-top: 0pt;
            color: #000000;
            font-size: 26pt;
            padding-bottom: 3pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        
        .subtitle {
            padding-top: 0pt;
            color: #666666;
            font-size: 15pt;
            padding-bottom: 16pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        
        li {
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }
        
        p {
            margin: 0;
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }
        
        h1 {
            padding-top: 20pt;
            color: #000000;
            font-size: 20pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        
        h2 {
            padding-top: 18pt;
            color: #000000;
            font-size: 16pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        
        h3 {
            padding-top: 16pt;
            color: #434343;
            font-size: 14pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        
        h4 {
            padding-top: 14pt;
            color: #666666;
            font-size: 12pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        
        h5 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        
        h6 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            font-style: italic;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    </style>
</head>
<?php
if(isset($_POST['printindividual_dugme']))
{
    $id = $_POST['printindividual_id'];
    
    $query = "SELECT * FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {

        ?>  
<body class="c12" onload="window.print()">
    <div>
        <p class="c1"><span class="c16">ДОГОВОР</span></p>
        <p class="c1"><span class="c16">ЗА КУПОПРОДАЖБА НА ВИНСКО ГРОЗЈЕ ЗА РЕКОЛТАТА 2020 ГОДИНА</span></p>
    </div>
    <p class="c0"><span class="c25"></span></p>
    <p class="c5"><span class="c4">Склучен на ден 05.09.2020 помеѓу:</span></p>
    <p class="c0"><span class="c4"></span></p>
    <ol class="c6 lst-kix_6ou024orqhig-0 start" start="1">
        <li class="c14 c20"><span class="c22">ВАЛАВИНО ДОО Росоман</span><span class="c4">, со седиште на ул. Гоце Делчев Бр.13, Росоман, ЕМБС 7024345, ЕДБ 2000493852345, застапувано од Управителот на друштвото Гоце Мојсов како Купувач (во понатамошниот текст: КУПУВАЧОТ)  и</span></li>
        <li class="c14 c20"><span class="c22"><?php echo $row['ime'] ?> <?php echo $row['prezime'] ?></span><span class="c4">, со живеалиште на <?php echo $row['adresa'] ?>, <?php echo $row['grad'] ?>, ЕМБГ <?php echo $row['embg'] ?>, со трансакциска с-ка <?php echo $row['zirosmetka'] ?>, Деп. Банка. <?php echo $row['deponentnabanka'] ?>, од друга страна како Продавач (во понатамошниот текст: ПРОИЗВОДИТЕЛ НА ГРОЗЈЕ).</span></li>
    </ol>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 1 - Предмет на договорот</span></p>
    <p class="c1 c7"><span class="c4"></span></p>
    <p class="c14"><span class="c4">Предмет на овој договор е купопродажба на грозје за потребите на производниот процес на КУПУВАЧОТ произведено на лозјето/лозјата на ПРОИЗВОДИТЕЛ НА ГРОЗЈЕ.</span></p>
    <p class="c14"><span class="c4">Со склучувањето на овој Договор ПРОИЗВОДИТЕЛ НА ГРОЗЈЕ се обврзува да му предаде и продаде на КУПУВАЧОТ грозје, а КУПУВАЧОТ се согласува да прими и купи грозје произведено на лозјето/лозјата на ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ.</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 2 - Дефиниција на сорти предмет на откуп</span></p>
    <p class="c1 c7"><span class="c4"></span></p>
    <p class="c5"><span class="c4">Следните сорти и очекувани количини се предмет на Членот 1:</span></p>
    <p class="c0"><span class="c4"></span></p>
    <a id="t.4eb7d9c8c47c21bf06b0cd4695b2c1e25438acd6"></a>
    <a id="t.0"></a>
    <table class="c21">
        <tbody>
            <tr class="c8">
                <td class="c24" colspan="1" rowspan="1">
                    <p class="c17"><span class="c3">Сорта</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c17"><span class="c3">Кат.општ</span></p>
                </td>
                <td class="c9" colspan="1" rowspan="1">
                    <p class="c17"><span class="c3">Кат.парц.</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c17"><span class="c3">Викано место</span></p>
                </td>
                <td class="c23" colspan="1" rowspan="1">
                    <p class="c17"><span class="c3">Повр.(м2)</span></p>
                </td>
                <td class="c15" colspan="1" rowspan="1">
                    <p class="c17"><span class="c3">Очекувано (кг)</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c17"><span class="c3">Шеќ. ед. (%</span></p>
                    <p class="c17"><span class="c3">на алк. во виното)</span></p>
                </td>
            </tr>
            <tr class="c8">
                <td class="c24" colspan="1" rowspan="1">
                    <p class="c2"><span class="c4"><?php echo $row['sorta'] ?></span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c4"><?php echo $row['katopst'] ?></span></p>
                </td>
                <td class="c9" colspan="1" rowspan="1">
                    <p class="c2"><span class="c4"><?php echo $row['katparc'] ?></span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c4"><?php echo $row['vikmesto'] ?></span></p>
                </td>
                <td class="c23" colspan="1" rowspan="1">
                    <p class="c2"><span class="c4"><?php echo $row['povrsina'] ?></span></p>
                </td>
                <td class="c15" colspan="1" rowspan="1">
                    <p class="c2"><span class="c4"><?php echo $row['ocekuvanokg'] ?></span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c2"><span class="c4"><?php echo $row['seker'] ?></span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c0"><span class="c4"></span></p>
    <p class="c14"><span class="c4">Предавањето на грозјето предмет на овој Договор ќе се врши во деловниот круг на ВАЛАВИНО ДОО во Подружницата Винарска Визба КО Росоман, ул. Гоце Делчев бр.13, Росоман, Росоман. КУПУВАЧОТ е должен за купеното грозје на ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ да му издаде за секоја предадена сорта грозје приемница - кантарна белешка</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 3 - Цена и плаќање</span></p>
    <p class="c1 c7"><span class="c4"></span></p>
    <p class="c14"><span class="c4">Откупната цена за секоја сорта грозје ќе биде објавена на откупното место. Точната цена ќе се утврди најдозна на денот на откупот на грозјето. КУПУВАЧОТ плаќањето на купопродажната цена за предаденото количество грозе согласно овој Договор ќе го изврши на трансакциска сметка на ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ според законската регулатива на Република Северна Македонија.
    </span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 4 - Берба</span></p>
    <p class="c1 c7"><span class="c4"></span></p>
    <p class="c14"><span class="c4">Точното време на бербата и денот на преземањето на грозјето предмет на овој Договор, во зависност од неопходната технолошка зрелост, ќе се определи дополнително, на начин што КУПУВАЧОТ ќе го извести ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ телефонски или преку огласна табла на откупното место за почетокот на откупот. ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ ќе ги преземе потребните мерки бербата на грозјето и времето на предавањето да биде во назначеното време.</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 5 - Времетраење и раскинување на договорот</span></p>
    <p class="c1 c7"><span class="c4"></span></p>
    <p class="c5"><span class="c4">Овој Договор се склучува и се однесува само за бербата на грозјето од реколта 2020 година. Овој договор може да се раскине само под услови предвидени во Законот за облигациони односи.</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 6 - Обврски на производителот на грозје</span></p>
    <p class="c1 c7"><span class="c3"></span></p>
    <p class="c5"><span class="c4">ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ гарантира и е должен да го предаде грозјето предмет на овој Договор во здрава состојба без присуство на страни предмети, состојки кои не се грозје, да не е мешано со друга сорта на грозје, да биде со минимално присуство на лисја и без оксидација, со здраствена состојба без поголемо присуство на ботритис (трулеж од 10%). Предавањето на грозјето, односно испораката, ќе се изврши во истиот ден кога е берено грозјето според план, програма и динамика определена од КУПУВАЧОТ. Доколку грозјето што се предава ги нема шеќерните единици утврдени во Член 2 на овој Договор или не ги исполнува условите од предходниот став на овој Член КУПУВАЧОТ не е во обврска да го преземе и купи понуденото количество грозје. КУПУВАЧОТ има право во секој момент да добие увид во списокот на користени заштитни препарати кои ги користи ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ во фазата на производство на грозјето.</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 7 - Невозможност за исполнување на обврската</span></p>
    <p class="c1 c7"><span class="c3"></span></p>
    <p class="c5"><span class="c4">Договорените страни се согласни, секоја од нив да биде ослободена од обврската за штетата поради неисполнување на своите обврски преземени од овој Договор. односно поради задоцнување со исполнувањето на истите, доколку до тоа дошло поради околности настанати по склучувањето на овој Договор кои не можеле да го спречат, отстранат или избегнат.</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 8 - Договорна казна</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c5"><span class="c4">Договорените страни се согласни, доколку ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ не му ги предаде на КУПУВАЧОТ количините (по видовите) грозје од Член 2 на овој Договор, ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ на КУПУВАЧОТ да му плати договорна казна во висина од 10% од вредноста на непредадените количини грозје, пресметано според цените од Член 2 на овој Договор. Договорната казна треба да се исплати следниот ден по истекот на рокот за предавање на грозјето согласно планот од Член 4. Договорните страни се согласни, КУПУВАЧОТ да е овластен побарувањето за договорната казна од предходниот став да го копензира - пребие со паричното пребарување што ПРОИЗВОДИТЕЛОТ НА ГРОЗЈЕ го има по основ на овој Договор.</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 9</span></p>
    <p class="c1 c7"><span class="c3"></span></p>
    <p class="c5"><span class="c4">За се што не е предвидено со овој Договор ќе се применуваат одредбиде од ЗОО, Законот на земјоделство и рурален развој и Законот за виното. Секоја промена во Договорот може да се направи само во писмена форма со Анекс кон договорот.</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c3">Член 10</span></p>
    <p class="c1 c7"><span class="c3"></span></p>
    <p class="c5"><span class="c4">Во случај на спор настанат од односите утврдени со овој Договор, договорните страни се согласни предходно спорот да го решат на мирен начин, а доколку во тоа не успеат спорниот однос ќе го решаваат пред стварно и месно надлежниот суд за Купувачот Основниот суд Скопје 2 во Скопје.</span></p>
    <p class="c0"><span class="c4"></span></p>
    <p class="c1"><span class="c22">Член 11</span></p>
    <p class="c5"><span class="c4">Договорот стапува во сила и ќе се применува веднаш по потпишувањето, и е составен во 2 (два) истоветни примероци, по 1 (еден) примерок за договорните страни</span></p>
    <p class="c5">
        <p class="c0"><span class="c4"></span></p>
        <p class="c0"><span class="c4"></span></p>
        <p class="c0"><span class="c4"></span></p>
        <a id="t.a55c390e14f35e29268ca02ea71e12e3e62b52b7"></a>
        <a id="t.1"></a>
        <table class="c21">
            <tbody>
                <tr class="c8">
                    <td class="c18" colspan="1" rowspan="1">
                        <p class="c10"><span class="c4">ЗА ПРОИЗВОДИТЕЛОТ </span></p>
                        <p class="c10"><span class="c4">НА ГРОЗЈЕ</span></p>
                        <p class="c2"><span class="c4"></span></p>
                    </td>
                    <td class="c18" colspan="1" rowspan="1">
                        <p class="c10"><span class="c4">ЗА КУПУВАЧОТ</span></p>
                        <p class="c10"><span class="c4">ВАЛАВИНО ДОО РОСОМАН</span></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="c0"><span class="c4"></span></p>
</body>
<?php
    }
}
?>
</html>