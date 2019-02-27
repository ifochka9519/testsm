<?php
echo '<?xml version="1.0" encoding="utf-8" ?>';
?>
<root>
    @foreach($structsB as $structB)
        <item>
            <id>
                {{$structB->id}}
            </id>
            <field1>
                {{$structB->field_1}}
            </field1>
        </item>
    @endforeach
</root>