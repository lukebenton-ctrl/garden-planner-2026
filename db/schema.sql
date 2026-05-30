-- Garden Planner 2026 — schema
-- Generic key/value store for checkbox + bag toggle state.
-- Designed to grow: future tables (notes, harvest_log, photos) sit alongside.

CREATE TABLE IF NOT EXISTS app_state (
  state_key   VARCHAR(64)  NOT NULL PRIMARY KEY,
  state_value JSON         NOT NULL,
  updated_at  TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP
                                    ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Future: notes, harvest_log, photos go here as separate tables.
