select 
	exchange_symbols.id, 
	symbols.token,
  symbols.category_canonical,
  exchange_symbols.direction,
  exchange_symbols.indicator_timeframe
from
	exchange_symbols, symbols, quotes
where
  quotes.id = exchange_symbols.quote_id and
	exchange_symbols.symbol_id = symbols.id and
  quotes.canonical = 'USDT' and 
  direction is not null
order by direction;

select * from positions where exchange_symbol_id = 55;

select * from orders where position_id = 870;

select * from api_requests_log order by id desc;

select * from accounts;

update accounts set margin_override = null;

select * from positions where status in ('active', 'new') order by id desc;

select * from positions where status <> 'closed';

select * from core_job_queue where status <> 'completed' order by id desc;

select * from core_job_queue where status = 'failed' order by id desc;

select * from orders where id = 436;

select * from positions where id = 96;

select * from orders order by position_id;

select * from positions where status in ('new', 'active');

select * from positions where status not in ('new', 'active');

select * from exchange_symbols where id = 29;

select * from positions order by id desc;

select 
  positions.id, 
  symbols.token,
  positions.status, 
  positions.direction,
  symbols.category_canonical
from 
	positions, exchange_symbols, symbols
where
  positions.exchange_symbol_id = exchange_symbols.id and
  symbols.id = exchange_symbols.symbol_id
  and positions.id = 836
order by
  direction asc;
  
select * from positions where id in(2,14, 23);

select * from orders where position_id = 23;

select * from positions where status in('new', 'active');

select * from positions order by id desc;

select * from account_balance_history order by id desc;

SELECT 
    MAX(total_wallet_balance) - MIN(total_wallet_balance) AS difference
FROM 
    account_balance_history
WHERE 
    DATE(created_at) = '2025-01-20';

select * from api_requests_log where created_at > '2025-01-20 18:05:00' order by id asc;

select * from orders where created_at > '2025-01-20 17:00:00' and status = 'FAILED';

select * from api_requests_log where created_at > '2025-01-20 18:05:00' order by id asc;

select * from positions where id = 95;

select * from exchange_symbols where id = 52;

select * from trading_pairs;