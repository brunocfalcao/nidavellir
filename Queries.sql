select * from positions;

select * from orders;

select positions.id, exchange_symbol_id, 
symbols.token, symbols.category_canonical, positions.status, positions.account_id, 
exchange_symbols.direction,
exchange_symbols.indicator_timeframe,
positions.created_at
from positions, exchange_symbols, symbols
where positions.exchange_symbol_id = exchange_symbols.id
and symbols.id = exchange_symbols.symbol_id and status <> 'closed' order by category_canonical;

select exchange_symbols.id exchange_symbol_id, exchange_symbols.is_active, direction, symbols.token, symbols.category_canonical from exchange_symbols, symbols 
where exchange_symbols.symbol_id = symbols.id and is_tradeable = 1 and direction is not null
order by category_canonical;

select * from exchange_symbols where is_tradeable = 1 and indicator_timeframe = '1h';

#update exchange_symbols set is_tradeable = 1 where symbol_id in (select id from symbols where category_canonical = 'top20');

select * from exchange_symbols where is_tradeable = 1 and symbol_id in (select id from symbols where category_canonical = 'top20');

select * from exchange_symbols where is_tradeable = 1 and direction = 'SHORT';

#update trade_configuration set direction_priority = 'SHORT';

#delete from positions where id in(31);

select * from exchange_symbols;

select * from exchange_symbols where id = 58;

select class, error_message, error_stack_trace from core_job_queue where status = 'failed';

select * from orders;

select count(1) from core_job_queue where status <> 'completed';

#update exchange_symbols set is_tradeable = 0 where id > 10;

select * from core_job_queue order by id desc;

select * from core_job_queue where class like '%SelectPositionToken%' order by id desc;