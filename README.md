# btrx

Задание
Сделать форму GeoIP поиска. Поиск будет осуществляться с помощью запроса в публичный веб-сервис (sypexgeo.net, geoip.top, ipstack.com на выбор).

Сценарий
Пользователь вводит валидный IP, отправляется запрос в HL блок, если в HL блоке присутствует запись с данным IP, то данные отображаются из базы, если в базе нет нужного ip, то запрос отправляется на один из сервисов, пользователю показываются данные из сервиса и записываются в базу.

Требования
Оформить в виде компонента Битрикс используя D7;
Использовать стандартный http или soap клиент битрикс;
Создание HL блока реализовать через миграцию (https://marketplace.1c-bitrix.ru/solutions/sprint.migration/);
Валидация должна присутствовать как минимум на серверной стороне;
Обработка ошибок и исключений;
Оформить страницу презентабельно (можно использовать инструменты типа Bootstrap);
Выполнить задание, используя ajax-запросы;
Производить комментирование кода.
Будет плюсом
Использовать Vue js;
В случае возникновения исключений отправлять на почту сообщение с данными об ошибке используя инструменты Битрикс.