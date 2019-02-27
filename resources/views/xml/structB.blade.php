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