<HTML>

<HEAD>
    <TITLE> TweetParser </TITLE>
</HEAD>

<BODY>
<h2> Welcome to TweetParser! </h2>

<?PHP


// function copied from Internet
function transliterateString($txt) {
    $transliterationTable = array('á' => 'a', 'Á' => 'A', 'à' => 'a', 'À' => 'A', 'ă' => 'a', 'Ă' => 'A', 'â' => 'a', 'Â' => 'A', 'å' => 'a', 'Å' => 'A', 'ã' => 'a', 'Ã' => 'A', 'ą' => 'a', 'Ą' => 'A', 'ā' => 'a', 'Ā' => 'A', 'ä' => 'ae', 'Ä' => 'AE', 'æ' => 'ae', 'Æ' => 'AE', 'ḃ' => 'b', 'Ḃ' => 'B', 'ć' => 'c', 'Ć' => 'C', 'ĉ' => 'c', 'Ĉ' => 'C', 'č' => 'c', 'Č' => 'C', 'ċ' => 'c', 'Ċ' => 'C', 'ç' => 'c', 'Ç' => 'C', 'ď' => 'd', 'Ď' => 'D', 'ḋ' => 'd', 'Ḋ' => 'D', 'đ' => 'd', 'Đ' => 'D', 'ð' => 'dh', 'Ð' => 'Dh', 'é' => 'e', 'É' => 'E', 'è' => 'e', 'È' => 'E', 'ĕ' => 'e', 'Ĕ' => 'E', 'ê' => 'e', 'Ê' => 'E', 'ě' => 'e', 'Ě' => 'E', 'ë' => 'e', 'Ë' => 'E', 'ė' => 'e', 'Ė' => 'E', 'ę' => 'e', 'Ę' => 'E', 'ē' => 'e', 'Ē' => 'E', 'ḟ' => 'f', 'Ḟ' => 'F', 'ƒ' => 'f', 'Ƒ' => 'F', 'ğ' => 'g', 'Ğ' => 'G', 'ĝ' => 'g', 'Ĝ' => 'G', 'ġ' => 'g', 'Ġ' => 'G', 'ģ' => 'g', 'Ģ' => 'G', 'ĥ' => 'h', 'Ĥ' => 'H', 'ħ' => 'h', 'Ħ' => 'H', 'í' => 'i', 'Í' => 'I', 'ì' => 'i', 'Ì' => 'I', 'î' => 'i', 'Î' => 'I', 'ï' => 'i', 'Ï' => 'I', 'ĩ' => 'i', 'Ĩ' => 'I', 'į' => 'i', 'Į' => 'I', 'ī' => 'i', 'Ī' => 'I', 'ĵ' => 'j', 'Ĵ' => 'J', 'ķ' => 'k', 'Ķ' => 'K', 'ĺ' => 'l', 'Ĺ' => 'L', 'ľ' => 'l', 'Ľ' => 'L', 'ļ' => 'l', 'Ļ' => 'L', 'ł' => 'l', 'Ł' => 'L', 'ṁ' => 'm', 'Ṁ' => 'M', 'ń' => 'n', 'Ń' => 'N', 'ň' => 'n', 'Ň' => 'N', 'ñ' => 'n', 'Ñ' => 'N', 'ņ' => 'n', 'Ņ' => 'N', 'ó' => 'o', 'Ó' => 'O', 'ò' => 'o', 'Ò' => 'O', 'ô' => 'o', 'Ô' => 'O', 'ő' => 'o', 'Ő' => 'O', 'õ' => 'o', 'Õ' => 'O', 'ø' => 'oe', 'Ø' => 'OE', 'ō' => 'o', 'Ō' => 'O', 'ơ' => 'o', 'Ơ' => 'O', 'ö' => 'oe', 'Ö' => 'OE', 'ṗ' => 'p', 'Ṗ' => 'P', 'ŕ' => 'r', 'Ŕ' => 'R', 'ř' => 'r', 'Ř' => 'R', 'ŗ' => 'r', 'Ŗ' => 'R', 'ś' => 's', 'Ś' => 'S', 'ŝ' => 's', 'Ŝ' => 'S', 'š' => 's', 'Š' => 'S', 'ṡ' => 's', 'Ṡ' => 'S', 'ş' => 's', 'Ş' => 'S', 'ș' => 's', 'Ș' => 'S', 'ß' => 'SS', 'ť' => 't', 'Ť' => 'T', 'ṫ' => 't', 'Ṫ' => 'T', 'ţ' => 't', 'Ţ' => 'T', 'ț' => 't', 'Ț' => 'T', 'ŧ' => 't', 'Ŧ' => 'T', 'ú' => 'u', 'Ú' => 'U', 'ù' => 'u', 'Ù' => 'U', 'ŭ' => 'u', 'Ŭ' => 'U', 'û' => 'u', 'Û' => 'U', 'ů' => 'u', 'Ů' => 'U', 'ű' => 'u', 'Ű' => 'U', 'ũ' => 'u', 'Ũ' => 'U', 'ų' => 'u', 'Ų' => 'U', 'ū' => 'u', 'Ū' => 'U', 'ư' => 'u', 'Ư' => 'U', 'ü' => 'ue', 'Ü' => 'UE', 'ẃ' => 'w', 'Ẃ' => 'W', 'ẁ' => 'w', 'Ẁ' => 'W', 'ŵ' => 'w', 'Ŵ' => 'W', 'ẅ' => 'w', 'Ẅ' => 'W', 'ý' => 'y', 'Ý' => 'Y', 'ỳ' => 'y', 'Ỳ' => 'Y', 'ŷ' => 'y', 'Ŷ' => 'Y', 'ÿ' => 'y', 'Ÿ' => 'Y', 'ź' => 'z', 'Ź' => 'Z', 'ž' => 'z', 'Ž' => 'Z', 'ż' => 'z', 'Ż' => 'Z', 'þ' => 'th', 'Þ' => 'Th', 'µ' => 'u', 'а' => 'a', 'А' => 'a', 'б' => 'b', 'Б' => 'b', 'в' => 'v', 'В' => 'v', 'г' => 'g', 'Г' => 'g', 'д' => 'd', 'Д' => 'd', 'е' => 'e', 'Е' => 'E', 'ё' => 'e', 'Ё' => 'E', 'ж' => 'zh', 'Ж' => 'zh', 'з' => 'z', 'З' => 'z', 'и' => 'i', 'И' => 'i', 'й' => 'j', 'Й' => 'j', 'к' => 'k', 'К' => 'k', 'л' => 'l', 'Л' => 'l', 'м' => 'm', 'М' => 'm', 'н' => 'n', 'Н' => 'n', 'о' => 'o', 'О' => 'o', 'п' => 'p', 'П' => 'p', 'р' => 'r', 'Р' => 'r', 'с' => 's', 'С' => 's', 'т' => 't', 'Т' => 't', 'у' => 'u', 'У' => 'u', 'ф' => 'f', 'Ф' => 'f', 'х' => 'h', 'Х' => 'h', 'ц' => 'c', 'Ц' => 'c', 'ч' => 'ch', 'Ч' => 'ch', 'ш' => 'sh', 'Ш' => 'sh', 'щ' => 'sch', 'Щ' => 'sch', 'ъ' => '', 'Ъ' => '', 'ы' => 'y', 'Ы' => 'y', 'ь' => '', 'Ь' => '', 'э' => 'e', 'Э' => 'e', 'ю' => 'ju', 'Ю' => 'ju', 'я' => 'ja', 'Я' => 'ja', '\'' => ' ');
    return str_replace(array_keys($transliterationTable), array_values($transliterationTable), $txt);
}

// function sending an instruction to Oracle (and returning errors)
function sendOracle($conn, $message, $errMess)
{
    $stmt = ociparse($conn, $message);
    $resultOp = ociexecute($stmt);
    
    if ($resultOp === false)
    {
        $e = oci_error($stmt);
        echo nl2br($errMess.': '.$e["message"]."\n");
    }
    
    ocicommit($stmt);
    oci_free_statement($stmt);
}

// function checking if there is a record fulfilling "select" query
function searchOracle($conn, $message, $errMess)
{
    $stmt = ociparse($conn, $message);
    $resultOp = ociexecute($stmt);
    
    if ($resultOp === false)
    {
        $e = oci_error($stmt);
        echo nl2br($errMess.': '.$e["message"]."\n");
    }
    
    if (ocifetch($stmt))
    {
        oci_free_statement($stmt);
        return true;
    }
    oci_free_statement($stmt);
    return false;
    
}

/// CREATING PROCEDURES FUNCTIONS

function createProcedure1($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_1(beg VARCHAR2, en VARCHAR2, howmuch NUMBER) IS 
                was_retweeted VARCHAR2(15) := ' was retweeted ';
                times VARCHAR2(7) := ' times.';
            BEGIN
                FOR row IN (
                    SELECT usnm, summa FROM (SELECT u.user_id, u.name usnm, SUM(s.rtc) summa FROM users u JOIN (select user_id ud, retweet_count rtc FROM statuses WHERE created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD')) s ON u.user_id = s.ud GROUP BY u.user_id, u.name ORDER BY summa DESC) where rownum <= howmuch
                ) LOOP
                    dbms_output.put_line(row.usnm || was_retweeted || row.summa || times);
                END LOOP;
            END;
        ",
        "Inserting procedure1 failed");
}

function createProcedure2($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_2(hashtname VARCHAR2, beg VARCHAR2, en VARCHAR2) IS 
                after VARCHAR2(6) := 'After ';
                oclock VARCHAR2(9) := ' oclock: ';
                times VARCHAR2(7) := ' times.';
                endrow VARCHAR2(60) := 'No more tweets with given hashtag appeared after any oclock.';
                BEGIN
                    FOR row IN (
                        SELECT tc, count(*) num FROM (SELECT to_char(created_at, 'HH24') tc from statuses s JOIN (SELECT status_id FROM hashtags WHERE hashtag_name LIKE hashtname) t ON s.status_id = t.status_id where created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD')) GROUP BY tc ORDER BY tc
                    ) LOOP
                        dbms_output.put_line(after || row.tc || oclock || row.num || times);
                    END LOOP;
                    dbms_output.put_line(endrow);
                END;
        ",
        "Inserting procedure2 failed");
}

function createProcedure3($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_3(begr VARCHAR2, enr VARCHAR2, begt VARCHAR2, ent VARCHAR2) IS 
                user VARCHAR2(5) := 'User ';
                colon VARCHAR2(2) := ': ';
                retweets VARCHAR2(11) := ' retweets, ';
                favourites VARCHAR2(13) := ' favourites, ';
                hashtags VARCHAR2(11) := ' hashtags, ';
                mentions VARCHAR2(10) := ' mentions.';
                BEGIN
                    FOR row IN (
                        SELECT t1.nom nome, t1.arc howmrt, t1.afc howmfv, t2.hanum howmhtg, t2.menum howmmen FROM (SELECT u.name nom, AVG(s.retweet_count) arc, AVG(s.favorite_count) afc FROM users u JOIN statuses s ON u.user_id = s.user_id WHERE (s.created_at BETWEEN to_date(begt,'YYYY-MM-DD') AND to_date(ent,'YYYY-MM-DD') + 1) AND (u.registration_date BETWEEN to_date(begr,'YYYY-MM-DD') AND to_date(enr,'YYYY-MM-DD') + 1) GROUP BY u.name) t1 JOIN (SELECT t3.nom nome2, t3.r hanum, t4.r menum  FROM (SELECT res.i, res.n nom, AVG(res.hfs) r FROM(SELECT t.user_id i, t.name n, t.status_id, COUNT (h.hashtag_name) hfs FROM (SELECT u.user_id, u.name, s.status_id FROM users u LEFT JOIN statuses s ON u.user_id = s.user_id WHERE (s.created_at BETWEEN to_date(begt,'YYYY-MM-DD') AND to_date(ent,'YYYY-MM-DD') + 1) AND (u.registration_date BETWEEN to_date(begr,'YYYY-MM-DD') AND to_date(enr,'YYYY-MM-DD') + 1)) t LEFT JOIN hashtags h ON t.status_id = h.status_id GROUP BY user_id, t.name, t.status_id) res GROUP BY res.i, res.n) t3 JOIN (SELECT res.i, res.n nom, AVG(res.hfs) r FROM(SELECT t.user_id i, t.name n, t.status_id, COUNT (h.user_id) hfs FROM (SELECT u.user_id, u.name, s.status_id FROM users u LEFT JOIN statuses s ON u.user_id = s.user_id WHERE (s.created_at BETWEEN to_date(begt,'YYYY-MM-DD') AND to_date(ent,'YYYY-MM-DD') + 1) AND (u.registration_date BETWEEN to_date(begr,'YYYY-MM-DD') AND to_date(enr,'YYYY-MM-DD') + 1)) t LEFT JOIN mentions h ON t.status_id = h.status_id GROUP BY t.user_id, t.name, t.status_id) res GROUP BY res.i, res.n) t4 ON t3.nom = t4.nom) t2 ON t1.nom = t2.nome2 ORDER BY nome
                    ) LOOP
                        dbms_output.put_line(user || row.nome || colon || row.howmrt || retweets || row.howmfv || favourites || row.howmhtg || hashtags || row.howmmen || mentions);
                    END LOOP;
                END;
        ",
        "Inserting procedure3 failed");
}

function createProcedure4($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_4(locatio VARCHAR, beg VARCHAR, en VARCHAR) IS 
                produced VARCHAR2(10) := ' produced ';
                tweets VARCHAR2(8) := ' tweets.';
            BEGIN
                FOR row IN (SELECT source, count(*) counter FROM statuses JOIN (SELECT user_id FROM users WHERE location LIKE CONCAT('%', CONCAT(locatio, '%'))) x ON statuses.user_id = x.user_id WHERE created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1 GROUP BY source) LOOP
                    dbms_output.put_line(row.source || produced || row.counter || tweets);
                END LOOP;
            END;
        ",
        "Inserting procedure4 failed");
}


function createProcedure5($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_5(beg VARCHAR, en VARCHAR, howmuch NUMBER) IS
                responds VARCHAR2(10) := ' responds ';
                times VARCHAR2(12) := ' times with ';
            BEGIN
                FOR row IN (SELECT * FROM (SELECT first.name fn, second.name sn, replies FROM((SELECT ux, uy, COUNT(sz) replies FROM (SELECT a.user_id ux, b.user_id uy FROM (SELECT DISTINCT users.user_id FROM users LEFT JOIN statuses ON users.user_id = statuses.user_id WHERE statuses.created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1) a, (SELECT DISTINCT users.user_id FROM users LEFT JOIN statuses ON users.user_id = statuses.user_id WHERE statuses.created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1) b WHERE a.user_id < b.user_id) JOIN (select main.user_id sx, rep.user_id sy, main.status_id sz FROM statuses main JOIN statuses rep ON main.reply_id = rep.status_id WHERE (main.created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1) AND (rep.created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1)) ON ((sx = ux AND sy = uy) OR (sx = uy AND sy = ux)) GROUP BY ux, uy ORDER BY replies DESC) best JOIN users first ON best.ux = first.user_id) JOIN users second ON best.uy = second.user_id ORDER BY replies DESC) WHERE rownum <= howmuch) LOOP
                    dbms_output.put_line(row.fn || responds || row.replies || times || row.sn);
                END LOOP;
            END;
        ",
        "Inserting procedure5 failed");
}


function createProcedure6($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_6(keytext VARCHAR2, beg VARCHAR2, en VARCHAR2, howmuch NUMBER) IS 
                mentioned VARCHAR2(11) := ' mentioned ';
                times VARCHAR2(7) := ' times.';
                BEGIN
                    FOR row IN (
                        select u.name n, counter FROM (select m.user_id top5, COUNT(*) counter from mentions m JOIN (SELECT status_id FROM statuses WHERE text LIKE CONCAT('%', CONCAT(keytext, '%')) AND created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1) s ON m.status_id = s.status_id GROUP BY m.user_id ORDER BY counter DeSC) d JOIN users u ON u.user_id = d.top5 WHERE rownum <= howmuch order by counter DESC
                    ) LOOP
                        dbms_output.put_line(row.n || mentioned || row.counter || times);
                    END LOOP;
                END;
        ",
        "Inserting procedure6 failed");
}

function createProcedure7($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_7(hasht VARCHAR2, beg VARCHAR2, en VARCHAR2) IS 
                cur DATE := TO_DATE(beg, 'YYYY-MM-DD');
                haret hashtags.hashtag_name%TYPE;
                meret users.name%TYPE;
                text VARCHAR2(16) := 'Average length: ';
                nhf VARCHAR2(26) := 'No hashtag found this day.';
                nmf VARCHAR2(26) := 'No mention found this day.';
                mpm VARCHAR2(22) := 'Most popular mention: ';
                mph VARCHAR2(22) := 'Most popular hashtag: ';
                spaces VARCHAR2(1) := ' ';
            BEGIN
                WHILE cur <= TO_DATE(en, 'YYYY-MM-DD') LOOP
                    dbms_output.put_line(cur);
                    BEGIN
                        SELECT u.name INTO meret FROM users u JOIN (SELECT uide FROM (SELECT m.user_id uide, COUNT(*) FROM mentions m JOIN (SELECT s.status_id side from statuses s JOIN (SELECT status_id FROM hashtags WHERE hashtag_name LIKE hasht) t ON s.status_id = t.status_id where created_at BETWEEN cur AND cur + 1) b ON m.status_id = b.side GROUP BY m.user_id) where rownum <= 1) b ON u.user_id = b.uide;
                        dbms_output.put_line(mpm || meret);
                        
                    EXCEPTION
                        WHEN NO_DATA_FOUND THEN
                            dbms_output.put_line(nmf);
                    END;
                    
                    BEGIN
                        SELECT res.uide INTO haret FROM (SELECT m.hashtag_name uide, COUNT(*) FROM hashtags m JOIN (SELECT s.status_id side from statuses s JOIN (SELECT status_id FROM hashtags WHERE hashtag_name LIKE 'etsy') t ON s.status_id = t.status_id where created_at BETWEEN cur AND cur + 1) b ON m.status_id = b.side WHERE m.hashtag_name NOT LIKE 'etsy' GROUP BY m.hashtag_name) res where rownum <= 1;
                        dbms_output.put_line(mph || haret);
                        
                    EXCEPTION
                        WHEN NO_DATA_FOUND THEN
                            dbms_output.put_line(nhf);
                    END;
                    
                    dbms_output.put_line(spaces);
                    cur := cur + 1;
                END LOOP;
            END;
        ",
        "Inserting procedure7 failed");
}

function createProcedure8($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_8(keywrd VARCHAR, locatio VARCHAR, beg VARCHAR, en VARCHAR) IS
                htw VARCHAR2(13) := ' has Tweets: ';
            BEGIN
                FOR row IN (SELECT COUNT(*) c FROM statuses JOIN (SELECT user_id FROM users WHERE location LIKE CONCAT('%', CONCAT(locatio, '%'))) u ON statuses.user_id = u.user_id WHERE text LIKE CONCAT('%', CONCAT(keywrd, '%')) AND (created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1)) LOOP
                    dbms_output.put_line(htw || row.c);
                END LOOP;
            END;
        ",
        "Inserting procedure8 failed");
}

function createProcedure9($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_9(beg VARCHAR, en VARCHAR, howmuch NUMBER) IS 
                BEGIN
                    FOR row IN (SELECT r.names n FROM(SELECT DISTINCT u.name names, (u.followers_count/u.friends_count) quotient FROM (SELECT * FROM users WHERE friends_count > 0) u JOIN (SELECT user_id FROM statuses WHERE created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1) s ON u.user_id = s.user_id ORDER BY quotient DESC) r WHERE rownum <= howmuch) LOOP
                        dbms_output.put_line(row.n);
                END LOOP;
            END;
        ",
        "Inserting procedure9 failed");
}

function createProcedure10($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_10(lingua VARCHAR2, locatio VARCHAR2, beg VARCHAR2, en VARCHAR2, howmuch NUMBER) IS 
                wrote VARCHAR2(7) := ' wrote ';
                tweets VARCHAR2(10) := ' tweet(s).';
            BEGIN
                FOR row IN (SELECT name, nmb FROM (SELECT u.user_id, name, count(s.status_id) nmb FROM users u JOIN (SELECT user_id, status_id FROM statuses WHERE created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1 AND lang LIKE lingua) s ON u.user_id = s.user_id WHERE location LIKE CONCAT('%', CONCAT(locatio, '%')) GROUP BY u.user_id, name ORDER BY nmb DESC) WHERE rownum <= howmuch) LOOP
                    dbms_output.put_line(row.name || wrote || row.nmb || tweets);
                END LOOP;
            END;
        ",
        "Inserting procedure10 failed");
}

function createProcedure11($conn){

    sendOracle(
        $conn,
        "
            CREATE FUNCTION f11_0(locatio VARCHAR2, beg VARCHAR2, en VARCHAR2) RETURN NUMBER IS 
                retval NUMBER;
            BEGIN
                SELECT COUNT(z.user_id) asd INTO retval 
                FROM (SELECT DISTINCT u.user_id FROM users u JOIN (SELECT user_id FROM statuses WHERE created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1) s ON u.user_id = s.user_id WHERE u.description IS NOT NULL AND location LIKE CONCAT('%', CONCAT(locatio, '%'))) z;
  
                RETURN retval;
            END;
        ",
        "Inserting function11_0 failed");

    sendOracle(
        $conn,
        "
            CREATE FUNCTION f11_1(locatio VARCHAR2, beg VARCHAR2, en VARCHAR2) RETURN NUMBER IS 
                retval NUMBER;
            BEGIN
                SELECT COUNT(z.user_id) asd INTO retval 
                FROM (SELECT DISTINCT u.user_id FROM users u JOIN (SELECT user_id FROM statuses WHERE created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1) s ON u.user_id = s.user_id WHERE location LIKE CONCAT('%', CONCAT(locatio, '%'))) z;
  
                RETURN retval;
            END;
        ",
        "Inserting function11_1 failed");

    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_11(locatio VARCHAR2, beg VARCHAR2, en VARCHAR2) IS 
                text VARCHAR2(16) := 'Average length: ';
                text2 VARCHAR2(36) := 'No tweets, we cannot count quotient.';
                text3 VARCHAR2(43) := ' per cent of given users have descriptions.';
                a NUMBER;
                b NUMBER;
            BEGIN
                SELECT f11_0(locatio, beg, en) INTO a FROM dual;
                SELECT f11_1(locatio, beg, en) INTO b FROM dual;

                IF b = 0 THEN
                    dbms_output.put_line(text2);
                END IF;
                
                IF b > 0 THEN
                    dbms_output.put_line(a / b * 100 || text3);
                END IF;

                IF a > 0 THEN
                
                    FOR row IN (SELECT AVG(desclength) res FROM (SELECT DISTINCT u.user_id, length(u.description) desclength FROM users u JOIN (SELECT user_id FROM statuses WHERE created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD') + 1) s ON u.user_id = s.user_id WHERE u.description IS NOT NULL AND location LIKE CONCAT('%', CONCAT(locatio, '%')))) LOOP
                        dbms_output.put_line(text || row.res);
                    END LOOP;
                END IF;
            END;
        ",
        "Inserting procedure11 failed");
}

function createProcedure12($conn){
    sendOracle(
        $conn,
        "
            CREATE PROCEDURE zapytanie_12(beg VARCHAR2, en VARCHAR2, howmuch NUMBER) IS 
                appeared VARCHAR2(10) := ' appeared ';
                times VARCHAR2(7) := ' times.';
            BEGIN
                FOR row IN (
                    SELECT word, numb FROM (SELECT word, count(s.user_id) numb FROM words LEFT JOIN (SELECT DISTINCT user_id FROM statuses WHERE created_at BETWEEN to_date(beg,'YYYY-MM-DD') AND to_date(en,'YYYY-MM-DD')) s ON  words.user_id = s.user_id WHERE word NOT LIKE '%?%' GROUP BY word ORDER BY numb DESC) WHERE rownum <= howmuch
                ) LOOP
                    dbms_output.put_line(row.word || appeared || row.numb || times);
                END LOOP;
            END;
        ",
        "Inserting procedure12 failed");
}


/// CREATING TABLES FUNCTIONS

function create_table_user($conn)
{   
    sendOracle
    (
        $conn,
        "create table users
        (
            user_id VARCHAR2(20) PRIMARY KEY,
            name VARCHAR2(70),
            screen_name VARCHAR2(50) NOT NULL, 
            description VARCHAR2(300),
            followers_count NUMBER(11,0),
            friends_count NUMBER(11,0),
            registration_date DATE,
            statuses_count NUMBER(11,0),
            favourites_count NUMBER(11,0),
            location VARCHAR2(100)
        )",
        "Creating table users error"
    );
}

function create_table_status($conn)
{	
    sendOracle
    (
        $conn,
        "create table statuses
        (
            status_id VARCHAR2(20) PRIMARY KEY,
            user_id VARCHAR2(20) NOT NULL,
            text VARCHAR2(200),
            created_at DATE,
            retweet_count NUMBER(11,0),
            favorite_count NUMBER(11,0),
            retweeted_id VARCHAR2(20),
            reply_id VARCHAR2(20),
            lang VARCHAR2(5),
            source VARCHAR2(200)
        )",
        "Creating table statuses error"
    );
}

function create_table_hashtag($conn)
{   
    sendOracle
    (
        $conn,
        "create table hashtags
        (
            status_id VARCHAR2(20) NOT NULL,
            pos NUMBER(3,0) NOT NULL,
            hashtag_name VARCHAR2(50) NOT NULL,
            PRIMARY KEY (status_id, pos)
        )",
        "Creating table hashtags error"
    );
}

function create_table_mention($conn)
{   
    sendOracle
    (
        $conn,
        "create table mentions
        (
            status_id VARCHAR2(20) NOT NULL,
            pos NUMBER(3,0) NOT NULL,
            user_id VARCHAR2(20) NOT NULL,
            PRIMARY KEY (status_id, pos)
        )",
        "Creating table mentions error"
    );
}

function create_table_words($conn)
{   
    sendOracle
    (
        $conn,
        "CREATE TABLE words (
            user_id VARCHAR2(20),
            word VARCHAR(100),
            PRIMARY KEY (user_id, word)
        )",
        "Creating table words error"
    );
}

// clearing everything
function dropAll($conn)
{
    sendOracle($conn, "DROP PROCEDURE zapytanie_12", "Dropping procedure 12 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_11", "Dropping procedure 11 error");
    sendOracle($conn, "DROP FUNCTION f11_1", "Dropping function 11_1 error");
    sendOracle($conn, "DROP FUNCTION f11_0", "Dropping function 11_0 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_10", "Dropping procedure 10 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_9", "Dropping procedure 9 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_8", "Dropping procedure 8 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_7", "Dropping procedure 7 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_6", "Dropping procedure 6 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_5", "Dropping procedure 5 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_4", "Dropping procedure 4 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_3", "Dropping procedure 3 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_2", "Dropping procedure 2 error");
    sendOracle($conn, "DROP PROCEDURE zapytanie_1", "Dropping procedure 1 error");
    sendOracle($conn, "DROP TABLE words", "Dropping words error");
    sendOracle($conn, "DROP TABLE mentions", "Dropping mentions error");
    sendOracle($conn, "DROP TABLE hashtags", "Dropping hashtags error");
    sendOracle($conn, "DROP TABLE statuses", "Dropping statuses error");
    sendOracle($conn, "DROP TABLE users", "Dropping users error");
}

// clearing everything
function reload($conn)
{
    dropAll($conn);
    create_table_user($conn);
    create_table_status($conn);
    create_table_hashtag($conn);
    create_table_mention($conn);
    create_table_words($conn);
    createProcedure1($conn);
    createProcedure2($conn);
    createProcedure3($conn);
    createProcedure4($conn);
    createProcedure5($conn);
    createProcedure6($conn);
    createProcedure7($conn);
    createProcedure8($conn);
    createProcedure9($conn);
    createProcedure10($conn);
    createProcedure11($conn);
    createProcedure12($conn);
}

function commit($conn)
{   
    if (!ocicommit($conn))
    echo 'BŁĄD COMMITU!';
    
}

function rollback($conn)
{   
    if (!ocirollback($conn))
    echo 'BŁĄD ROLLBACKA!';
}

function insert_status($conn, $curStat)
{
    // first of all we insert data about user and status
    // the inserted status replies to (if it does)
    
    $repliedId = $curStat["in_reply_to_status_id_str"];
    $repliedUser = $curStat["in_reply_to_user_id_str"];
    $repliedName = transliterateString($curStat["in_reply_to_screen_name"]);
    
    if ($repliedId != null)
    {
        // we always check if the record already is in a table
        $i = searchOracle
        (
            $conn,
            "SELECT * FROM users WHERE user_id LIKE '$repliedUser'",
            "Searching for replied user error"
        );

        if ($i == false) {
            sendOracle
            (
                $conn,
                "INSERT INTO users (user_id, screen_name)
                VALUES ('$repliedUser', '$repliedName')",
                "Inserting replied user error"
            );
        }
 
        
        $i = searchOracle
        (
            $conn,
            "SELECT * FROM statuses WHERE status_id LIKE '$repliedId'",
            "Searching for replied status error"
        );

        if ($i == false) {
            sendOracle
            (
                $conn,
                "INSERT INTO statuses (status_id, user_id) VALUES
                (
                    '$repliedId',
                    '$repliedUser'
                )",
                "Inserting replied status error"
            );
        }
    }
    
    // if a tweet is a retweet, we will need data about retweeted
    // (but we will insert it later)
    $retweetedId = null;
    
    if (array_key_exists("retweeted_status", $curStat)) {
        $retweeted = $curStat["retweeted_status"];
        insert_status($conn, $retweeted);
        $retweetedId = $retweeted["id_str"];
    }
   	
    $userData = $curStat["user"];
    $userId = $userData["id_str"];

    $userName = transliterateString($userData["name"]);
    $userNick = transliterateString($userData["screen_name"]);
    $userDesc = transliterateString($userData["description"]);
    $userFoll = $userData["followers_count"];
    $userFrie = $userData["friends_count"];
    $userJoin = str_replace("+0000 ", "", $userData["created_at"]);
    $userCStat = $userData["statuses_count"];
    $userCFav = $userData["favourites_count"];
    $userLoca = transliterateString($userData["location"]);

    $i = searchOracle
    (
        $conn,
        "SELECT * FROM users WHERE user_id LIKE '$userId'",
        "Selecting user error"
    );
    
    // if any data about user are in a table, we update it
    if ($i == true)
    {
        sendOracle
        (
            $conn,
            "UPDATE users SET name = '$userName', description = '$userDesc',
            followers_count = $userFoll, friends_count = $userFrie,
            registration_date = TO_DATE('$userJoin', 'DY MON DD HH24:MI:SS YYYY'),
            statuses_count = $userCStat, favourites_count = $userCFav,
            location = '$userLoca' WHERE user_id LIKE '$userId'",
            "Updating user error"
        );
    }
    // else we insert a new record
    else 
    {
        sendOracle
        (
            $conn,
            "INSERT INTO users VALUES(
                '$userId',
                '$userName',
                '$userNick',
                '$userDesc',
                $userFoll,
                $userFrie,
                TO_DATE('$userJoin', 'DY MON DD HH24:MI:SS YYYY'),
                $userCStat,
                $userCFav,
                '$userLoca'
            )",
            "Inserting user error"
        );
    }
    
    $userWords = explode(" ", $userName);

    foreach ($userWords as $key => $value)
    if ($value != null)
    {
        $i = searchOracle
        (
            $conn,
            "SELECT * FROM words WHERE user_id LIKE '$userId' AND word LIKE '$value'",
            "Searching for word error"
        );

        if ($i == false) {
            sendOracle
            (
                $conn,
                "INSERT INTO words
                VALUES ('$userId', '$value')",
                "Inserting word error"
            );
        }
    }

    // similar way with status
    $createdAt = str_replace("+0000 ", "", $curStat["created_at"]);
    $statusId = $curStat["id_str"];
    $text = transliterateString($curStat["text"]);
    $hash = $curStat["entities"]["hashtags"];
    $mentions = $curStat["entities"]["user_mentions"];
    $sourceAdr = $curStat["source"];
    $howManyRetweets = $curStat["retweet_count"];
    $favorites = $curStat["favorite_count"];
    $language = $curStat["lang"];
    
    $i = searchOracle
    (
        $conn,
        "SELECT * FROM statuses WHERE status_id LIKE '$statusId'",
        "Selecting status error"
    );
    
    if ($i == true)
    {
        sendOracle
        (
            $conn,
            "UPDATE statuses SET
                text = '$text',
                created_at = TO_DATE('$createdAt', 'DY MON DD HH24:MI:SS YYYY'),
                retweet_count = $howManyRetweets,
                favorite_count = $favorites,
                retweeted_id = '$retweetedId',
                reply_id = '$repliedId',
                lang = '$language',
                source = '$sourceAdr'
                WHERE status_id LIKE '$statusId'",
            "Updating status error"
        );
    }
    else
    {
        sendOracle
        (
            $conn,
            "INSERT INTO statuses VALUES(
                '$statusId',
                '$userId',
                '$text',
                TO_DATE('$createdAt', 'DY MON DD HH24:MI:SS YYYY'),
                $howManyRetweets,
                $favorites,
                '$retweetedId',
                '$repliedId',
                '$language',
                '$sourceAdr'
            )",
            "Inserting status error"
        );

    }
    
    // inserting hashes
    foreach ($hash as $key => $value)
    {
        $hashPos = $value["indices"][0];
        $hashName = transliterateString($value["text"]);
        
        $i = searchOracle(
            $conn,
            "SELECT * FROM hashtags WHERE status_id = '$statusId' AND pos = $hashPos",
            "Selecting hashtag error"
        );
        
        if ($i == false)
        {
            sendOracle
            (
                $conn,
                "INSERT INTO hashtags VALUES
                (
                    '$statusId',
                    $hashPos,
                    '$hashName'
                )",
                "Inserting hashtag error"
            );
        }
        
        $mentionedWords = explode(" ", $mentionName);

        foreach ($mentionedWords as $key => $value)
        if ($value != null)
        {
            $i = searchOracle
            (
                $conn,
                "SELECT * FROM words WHERE user_id LIKE '$mentionId' AND word LIKE '$value'",
                "Searching for word (mentioned) error"
            );

            if ($i == false) {
                sendOracle
                (
                    $conn,
                    "INSERT INTO words 
                    VALUES ('$mentionId', '$value')",
                    "Inserting word (mentioned) error"
                );
            }
        }
    }
    
    // inserting mentions
    foreach ($mentions as $key => $value)
    {
        $mentionPos = $value["indices"][0];
        $mentionId = $value["id_str"];
        $mentionName = transliterateString($value["name"]);
        $mentionScreen = transliterateString($value["screen_name"]);
        
        // we also have to insert mentioned user
        $i = searchOracle(
            $conn,
            "SELECT * FROM users WHERE user_id = '$mentionId'",
            "Selecting mention error"
        );
        
        // mentioned user may not have data about name
        if ($i == false)
        {
            
            sendOracle
            (
                $conn,
                "INSERT INTO users (user_id, name, screen_name) VALUES
                (
                    '$mentionId',
                    '$mentionName',
                    '$mentionScreen'
                )",
                "Inserting user error"
            );
        }
        else
        {
            sendOracle
            (
                $conn,
                "UPDATE users SET
                    name = '$mentionName'
                WHERE user_id = '$mentionId'",
                "Updating user error"
            );
        }
        
        $i = searchOracle(
            $conn,
            "SELECT * FROM mentions WHERE status_id = '$statusId' AND pos = $mentionPos",
            "Selecting mention error"
        );
        
        if ($i == false)
        {
            sendOracle
            (
                $conn,
                "INSERT INTO mentions VALUES
                (
                    '$statusId',
                    $mentionPos,
                    '$mentionId')",
                "Inserting mention error"
            );
        }
    }

}

function import_from_file($conn, $source)
{
    // parsing from json to array
    $jsondata = file_get_contents("source/".$source);
    $data = json_decode($jsondata, true);

    $statuses = $data["statuses"];

    foreach ($statuses as $key => $value)
    {
        insert_status($conn, $value);
    }
}



// Creating a cookie
session_start();
// Saving login and password
$_SESSION['LOGIN'] = $_POST['LOGN'];
$_SESSION['PASS'] = $_POST['PASW'];
///////////////////////////////////

// Connecting with Oracle
$conn = oci_connect($_POST['LOGN'],$_POST['PASW']);

if (!$conn) {
    echo "oci_connect failed\n";
    $e = oci_error();
    echo nl2br($e['message']."\n");
}
else {
    rollback($conn);
    reload($conn);
    
    // downloading all files directly in a signed directory
    $directory = './source';
    $scannedDirectory = array_diff(scandir($directory), array('..', '.'));
    
    
    foreach ($scannedDirectory as $key => $value)
    {
        import_from_file($conn, $value);
    }
    
    commit($conn);
    
    
    

    echo "Downloading finished";
    
    
}
?>

<FORM ACTION="queries.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/> 
      <INPUT TYPE="SUBMIT"   VALUE="Go to Queries">
</FORM>

<FORM ACTION="logout.php" METHOD="POST"> 
      <input type='hidden' name='LOGN' value="<?php echo $_POST['LOGN'];?>"/> 
      <input type='hidden' name='PASW' value="<?php echo $_POST['PASW'];?>"/>
      <INPUT TYPE="SUBMIT"   VALUE="Logout">
</FORM>

</BODY>
</HTML>
