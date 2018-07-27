<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Ремонт | БорАВТО дилер Datsun");
$APPLICATION->SetTitle("repair");
?>
    <div class="header-spacer"></div>


    <div class="content">
        <div class="news-detail">
            <h1>Ремонт</h1>
            <div class="news-banner">
                <img src="./images/rem.jpg" class="news-banner-img">
                <div class="news-banner-menu">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/news-banner-menu.php"
                        )
                    );?>

                </div>
            </div>
            <div class="news-cont">
                <div class="news-subtitle">
                    СЛЕСАРНЫЙ РЕМОНТ
                </div>
                <p>
                    БорАВТО осуществляет весь спектр работ в области слесарного ремонта автомобилей Datsun с целью устранения неисправностей и поддержания их надежной работоспособности. Станция технического обслуживания площадью 813 кв. м оборудована прозрачными стенами, благодаря чему Вы можете наблюдать за тем, как специалисты БорАВТО проводят работы по сервисному обслуживанию Вашего автомобиля. <br>
                </p>
                <a href="#writingToServiceOnRepairS" class="form-fancybox service btn">Записаться на слесарный ремонт</a>
                <p>
                    &nbsp;
                </p>
                <div class="news-subtitle">
                    КУЗОВНОЙ РЕМОНТ
                </div>
                <p>
                    Кузовная станция БорАВТО выполняет ремонт автомобиля любой сложности: от устранения мелких косметических повреждений до полного восстановления геометрии кузова. Окрасочные работы осуществляются с использованием самых современных технологий и материалов. Малярно-кузовной цех площадью 716 кв.м способен обслуживать за смену около 40 автомобилей. В случае необходимости специалисты БорАВТО выполнят кузовные работы качественно и в максимально короткие сроки. <br>
                </p>
                <a href="#writingToServiceOnRepairK" class="form-fancybox service btn">Записаться на кузовной ремонт</a>
                <p>
                    &nbsp;
                </p>
                <p>
                </p>
                <div class="news-subtitle">
                    ДОКУМЕНТАЦИЯ
                </div>
                <div id="accordion">
                    <div class="accordionButton">
                        <p>
                            Правила приема на сервис. Бланк доверенности
                        </p>
                    </div>
                    <div class="accordionContent" style="display: none;">
                        <p>
                            Информируем Вас о том, что приёмка и передача автомобилей на техническое обслуживание и ремонт на станцию технического обслуживания возможны только при наличии документов, подтверждающих право собственности на автомобиль, либо при наличии доверенности, содержащей право на совершение подобных действий.
                        </p>
                        <p>
                            Право собственности должно быть подтверждено свидетельством о регистрации транспортного средства, а также документом, удостоверяющим личность (паспорт, водительское удостоверение, либо иными установленными законом документами). При обращении на станцию технического обслуживания на основании доверенности необходимо предъявить оригинал данной доверенности, а также документ удостоверяющий личность, данные которого должны соответствовать данным документа доверенного лица, указанным в доверенности.
                        </p>
                        <p>
                            <a href="/files/form.doc">Скачать бланк доверенности</a>
                        </p>
                    </div>
                    <div class="accordionButton">
                        <p>
                            Порядок приема на сервис
                        </p>
                    </div>
                    <div class="accordionContent" style="display: none;">
                        <ul>
                            <li>осмотр автомобиля мастером-консультантом в присутствии клиента с целью обнаружения царапин, трещин и других дефектов во избежание конфликтных ситуаций;</li>
                            <li>диагностика и оценка технического состояния автомобиля;</li>
                            <li>подробное обсуждение и согласование предстоящего ремонта;</li>
                            <li>информирование клиента о стоимости ремонта, цене запасных частей, сроке проведения всех работ;</li>
                            <li>подписание акта приемки-сдачи автомобиля;</li>
                            <li>выдача клиенту одного экземпляра данного акта.</li>
                        </ul>
                    </div>
                    <div class="accordionButton">
                        <p>
                            Порядок выдачи автомобиля
                        </p>
                    </div>
                    <div class="accordionContent" style="display: none;">
                        <ul>
                            <li>ознакомление клиента с перечнем выполненных работ;</li>
                            <li>демонстрация выполненных работ и замененных запасных частей;</li>
                            <li>предоставление мастером-консультантом счета с комментарием по каждой его позиции;</li>
                            <li>выдача ведомости технического обслуживания с пояснениями и рекомендациями;</li>
                            <li>осмотр автомобиля для проверки на отсутствие вновь появившихся царапин, трещин и других дефектов;</li>
                            <li>подписание акта сдачи-приемки автомобиля.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <!-- map -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/map.php"
            )
        );?>
        <!-- map END -->

    </div>

    <!-- content END -->



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>