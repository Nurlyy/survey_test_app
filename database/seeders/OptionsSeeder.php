<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Option::create(['question_id' => 1, 'option' => "Услуги", 'is_custom' => false]);
        Option::create(['question_id' => 1, 'option' => "Промышленность", 'is_custom' => false]);
        Option::create(['question_id' => 1, 'option' => "Торговля", 'is_custom' => false]);
        Option::create(['question_id' => 1, 'option' => "Сельское хозяйство", 'is_custom' => false]);
        Option::create(['question_id' => 1, 'option' => "Строительство", 'is_custom' => false]);
        Option::create(['question_id' => 1, 'option' => "Иное", 'is_custom' => true]);

        Option::create(['question_id' => 2, 'option' => "Более 5 лет", 'is_custom' => false]);
        Option::create(['question_id' => 2, 'option' => "Менее 1 года", 'is_custom' => false]);
        Option::create(['question_id' => 2, 'option' => "От 1 года до 5 лет", 'is_custom' => false]);
        Option::create(['question_id' => 2, 'option' => "Затрудняюсь ответить", 'is_custom' => false]);

        Option::create(['question_id' => 3, 'option' => "Обучение персонала", 'is_custom' => false]);
        Option::create(['question_id' => 3, 'option' => "Имущественная поддержка (льготная аренда, выкуп в рассрочку, безвозмездное пользование и т.д.)", 'is_custom' => false]);
        Option::create(['question_id' => 3, 'option' => "Информационно-маркетинговая поддержка", 'is_custom' => false]);
        Option::create(['question_id' => 3, 'option' => "Финансовая поддержка (льготные кредиты, субсидии и т.д.)", 'is_custom' => false]);
        Option::create(['question_id' => 3, 'option' => "Правовая поддержка", 'is_custom' => false]);
        Option::create(['question_id' => 3, 'option' => "Иное", 'is_custom' => true]);

        Option::create(['question_id' => 4, 'option' => "Нет", 'is_custom' => false]);
        Option::create(['question_id' => 4, 'option' => "Да", 'is_custom' => false]);

        Option::create(['question_id' => 5, 'option' => "Большое количество требуемых документов необходимых для получения поддержки не ясность порядка, который необходимо соблюсти при получении поддержки", 'is_custom' => false]);
        Option::create(['question_id' => 5, 'option' => "Длительные сроки получения поддержки", 'is_custom' => false]);
        Option::create(['question_id' => 5, 'option' => "Отсутствие информации о порядке получения поддержки", 'is_custom' => false]);
        Option::create(['question_id' => 5, 'option' => "Не возникало проблем при получении поддержки", 'is_custom' => false]);
        Option::create(['question_id' => 5, 'option' => "Иное", 'is_custom' => true]);

        Option::create(['question_id' => 6, 'option' => "Нет", 'is_custom' => false]);
        Option::create(['question_id' => 6, 'option' => "Да", 'is_custom' => false]);
        Option::create(['question_id' => 6, 'option' => "Иное", 'is_custom' => true]);

        Option::create(['question_id' => 7, 'option' => "Размещение информации на сайтах государственных органов власти и местного самоуправления", 'is_custom' => false]);
        Option::create(['question_id' => 7, 'option' => "Через организации, образующие инфраструктуру поддержки субъектов малого и среднего предпринимательства", 'is_custom' => false]);
        Option::create(['question_id' => 7, 'option' => "Информационные брошюры, размещение информации в социальных сетях", 'is_custom' => false]);
        Option::create(['question_id' => 7, 'option' => "Проведение круглых столов с участием государственных органов власти, местного самоуправления и бизнеса по вопросам имущественной поддержки", 'is_custom' => false]);
        Option::create(['question_id' => 7, 'option' => "Размещение информации на информационных стендах органов власти, в МФЦ СМИ (в т.ч. периодические печатные издания, телевидение)", 'is_custom' => false]);

        Option::create(['question_id' => 8, 'option' => "Нет", 'is_custom' => false]);
        Option::create(['question_id' => 8, 'option' => "Иное", 'is_custom' => true]);
        Option::create(['question_id' => 8, 'option' => "Да", 'is_custom' => false]);

        Option::create(['question_id' => 9, 'option' => "На праве собственности", 'is_custom' => false]);
        Option::create(['question_id' => 9, 'option' => "На праве аренды", 'is_custom' => false]);
        Option::create(['question_id' => 9, 'option' => "На ином виде права", 'is_custom' => false]);
        Option::create(['question_id' => 9, 'option' => "Не использую имущество", 'is_custom' => false]);

        Option::create(['question_id' => 10, 'option' => "Высокий уровень затрат на текущее содержание имущества (коммунальные расходы, ремонт и иные платежи)", 'is_custom' => false]);
        Option::create(['question_id' => 10, 'option' => "Высокий размер налога на имущество - Высокий размер арендной платы", 'is_custom' => false]);

        Option::create(['question_id' => 11, 'option' => "Движимое имущество (машины, оборудование и прочее)", 'is_custom' => false]);
        Option::create(['question_id' => 11, 'option' => "Производственные здания, помещения", 'is_custom' => false]);
        Option::create(['question_id' => 11, 'option' => "Земельные участки", 'is_custom' => false]);
        Option::create(['question_id' => 11, 'option' => "Коворкинги, лофты", 'is_custom' => false]);
        Option::create(['question_id' => 11, 'option' => "Иное", 'is_custom' => true]);

        Option::create(['question_id' => 12, 'option' => "Да", 'is_custom' => false]);
        Option::create(['question_id' => 12, 'option' => "Нет", 'is_custom' => false]);
        Option::create(['question_id' => 12, 'option' => "Иное", 'is_custom' => true]);

    }
}
