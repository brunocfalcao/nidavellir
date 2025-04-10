# --- Exchange Symbols available at the moment
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
  quotes.canonical = 'USDT'
  and is_tradeable = 1
  and direction is not null
order by symbols.token asc;

# --- Total filled orders by position.
select positions.id, symbols.token, positions.status, symbols.category_canonical, positions.direction, orders.status, count(1) as 'filled_orders'
from orders, exchange_symbols, symbols, positions 
where exchange_symbols.id = positions.exchange_symbol_id
and exchange_symbols.symbol_id = symbols.id
and positions.status = 'active'
and orders.position_id = positions.id
# ---
and orders.status in ('FILLED') 
# ---
group by positions.id order by positions.direction;

# --- Get all orders from each respective position for specific conditions.
select positions.id 'position_id', orders.* from
	positions, orders, exchange_symbols, symbols
    where
    positions.id = orders.position_id
    and positions.exchange_symbol_id = exchange_symbols.id
    and positions.account_id = 1
    and orders.position_id = positions.id
    and exchange_symbols.symbol_id = symbols.id
    # ----
    and symbols.token = 'ENA'
    and positions.status = 'active'
    # ----
    order by positions.created_at desc;
      
# --- The total active orders (should match the same number in the exchange).
select count(1) from orders, positions where orders.position_id = positions.id and orders.status in('NEW') and positions.status in ('new', 'active');

# -- Get overall positions information
select positions.id, symbols.token, positions.status, positions.last_mark_price, symbols.category_canonical, positions.direction
from exchange_symbols, symbols, positions 
where exchange_symbols.id = positions.exchange_symbol_id
and exchange_symbols.symbol_id = symbols.id
# ---
and positions.status in ('active', 'new')
# and symbols.token = 'SOL'
# and positions.id = 10565
# ---
order by positions.id desc;

# --- Positions query with any context you want.
select symbols.token, positions.*  from positions, exchange_symbols, symbols, quotes where
	positions.exchange_symbol_id = exchange_symbols.id
    and exchange_symbols.quote_id = quotes.id
    and exchange_symbols.symbol_id = symbols.id
# --- Your filters
    #and symbols.token = 'QNT'
    #and positions.direction = 'SHORT'
    and positions.status in ('new', 'active')
    #and positions.status = 'closed'
    #and symbols.token = 'THETA'
# --- Ordering
    order by id desc;
    
# --- Orders query with any context you want.
select orders.* from orders, positions, exchange_symbols, symbols, quotes where
	orders.position_id = positions.id
    and positions.exchange_symbol_id = exchange_symbols.id
    and exchange_symbols.quote_id = quotes.id
    and exchange_symbols.symbol_id = symbols.id
# --- Your filters
    #and symbols.token = 'AXS'
    and positions.status in ('active')
    #and positions.id = 3185
# --- Your Ordering
    order by id desc;
    
update positions set status = 'failed' where id in (305,304,303) limit 3;