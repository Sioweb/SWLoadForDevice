SWLoadForDevice
===============

Contao-Inhalte können für unterschiedliche Geräte aktiviert bzw. deaktiviert werden.

## Datein hinzufügen

Neue Geräte können jederzeit hinzugefügt werden. Dazu muss der folgende Code in die Datei `/system/config/initconfig.php` geschrieben werden.

      $GLOBALS['MobileDetect']['phoneDevices'] = array(
            'LG'            => '\bLG\b;|LG[- ]?(C800|C900|E400|E610|E900|E-900|F160|F180K|F180L|F180S|730|855|L160|LS740|LS840|LS970|LU6200|MS690|MS695|MS770|MS840|MS870|MS910|P500|P700|P705|VM696|AS680|AS695|AX840|C729|E970|GS505|272|C395|E739BK|E960|L55C|L75C|LS696|LS860|P769BK|P350|P500|P509|P870|UN272|US730|VS840|VS950|LN272|LN510|LS670|LS855|LW690|MN270|MN510|P509|P769|P930|UN200|UN270|UN510|UN610|US670|US740|US760|UX265|UX840|VN271|VN530|VS660|VS700|VS740|VS750|VS910|VS920|VS930|VX9200|VX11000|AX840A|LW770|P506|P925|P999|E612|D955|D802|MS323)',
            'Sony'          => 'SonyST|SonyLT|SonyEricsson|SonyEricssonLT15iv|LT18i|E10i|LT28h|LT26w|SonyEricssonMT27i|C5303|C6902|C6903|C6906|C6943|D2533',
            'Asus'          => 'Asus.*Galaxy|PadFone.*Mobile',
      );
    
## Mögliche Werte

- phoneDevices
- properties
- browsers
- tabletDevices
- operatingSystems
- utilities

## Werte komplett überschreiben

In diesem Beispiel werden die Werte aus der Klasse komplett überschrieben. Dazu müssen lediglich die Werte aus dem letzten Punkt in das Array `$GLOBALS['MobileDetect']['phoneDevices']['replace']` geschrieben werden.

      $GLOBALS['MobileDetect']['phoneDevices']['replace'] = array('phoneDevices','tabletDevices');

**Achtung:** Dies ist nicht zu empfehlen, da sonst nur die von Hand eingetragenen Gerätetypen funktionieren werden. Im obigen Beispiel würden nur noch drei Mobile-Geräte erkannt werden.

## Rock Solid Custom Elements (Ab v2.3.0)

Um die Funktionalität für RSCE zu erweitern muss das Feld `sw_device` in der Config des neuen Elementes hinzugefügt werden. Im Folgenden das Beispielsnippet von RSCE:

      <?php
            // rsce_my_element_config.php
            return array(
                'label' => array('Mein Element', 'Meine Beschreibung...'),
                'types' => array('content', 'module'),
                'contentCategory' => 'texts',
                'moduleCategory' => 'miscellaneous',
                'standardFields' => array('headline', 'cssID'),
                'wrapper' => array(
                    'type' => 'none',
                ),
                'fields' => array(
                    'text' => array(
                        'label' => array('Text', 'Beschreibung...'),
                        'eval' => array('rte' => 'tinyMCE'),
                        'inputType' => 'textarea',
                    ),
                    'sw_device' => array(
                        'label' => array('Load for Device', 'Beschreibung...'),
                        'inputType' => 'select',
                        'reference' => &$GLOBALS['TL_LANG']['tl_content']['sw_devices'],
                        'options' => array('all','desktop','mobile','mobile&ipad','desktop&ipad'),
                    ),
                ),
            );
