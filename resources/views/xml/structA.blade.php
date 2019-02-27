<?php
    echo '<?xml version="1.0" encoding="utf-8" ?>';
    ?>
<root>
    @foreach($structsA as $structA)
        <item>
            <id>
                {{$structA->id}}
            </id>
            <name>
                {{$structA->name}}
            </name>
            <structB>
                <id>
                    {{$structA->structB->id}}
                </id>
                <field1>
                    {{$structA->structB->field_1}}
                </field1>
            </structB>
        </item>
    @endforeach
</root>
