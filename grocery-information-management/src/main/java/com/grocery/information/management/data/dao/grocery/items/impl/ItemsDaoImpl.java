package com.grocery.information.management.data.dao.grocery.items.impl;

import com.grocery.information.management.appl.model.items.Items;
import com.grocery.information.management.data.dao.grocery.items.ItemsDao;
import org.junit.platform.commons.logging.LoggerFactory;

import java.util.List;
import java.util.logging.Logger;

public class ItemsDaoImpl implements ItemsDao {

    private static final Logger LOGGER = LoggerFactory.getLogger(ItemsDaoImpl.class);

    @Override
    public List<Items> getAllItems() {
        List<Items> itemsList = new ArrayList<>();
        try (Connection con = new ConnectionHelper().getConnection()){
            PreparedStatement statement = con.prepareStatement(QueryConstants.GET_ALL_ITEMS_STATEMENT);
            ResultSet rs= statement.executeQuery();

            while(rs.next()) {
                itemsList.add(setItems(rs));
            }
            LOGGER.debug("Items retrieved successfully.");

        } catch (SQLException ex) {
            LOGGER.error("An SQL Exception occurred." + ex.getMessage());
        }
        LOGGER.debug("Items database is empty.");
        return itemsList;
    }

    @Override
    public Items getItemById(String id) {
        Items items = null;
        try (Connection con = new ConnectionHelper().getConnection()) {
            PreparedStatement statement = con.prepareStatement(QueryConstants.GET_ITEM_BY_ID_STATEMENT);
            statement.setString(1, id);
            ResultSet rs= statement.executeQuery();

            if(rs.next()) {
                LOGGER.debug("Item retrieved successfully.");
                items = setItems(rs);
            }

        } catch (SQLException ex) {
            LOGGER.error("An SQL Exception occurred." + ex.getMessage());
        }
        LOGGER.debug("Item not found.");
        return item;
    }

    @Override
    public List<Items> getItemsByIdList(List<String> ids) {
        List<Items> itemList = new ArrayList<>();
        try (Connection con = new ConnectionHelper().getConnection()) {
            PreparedStatement statement = con.prepareStatement(QueryConstants.GET_ITEMS_BY_IDS_STATEMENT + buildParameters(ids));
            for(int i=1; i<=ids.size(); i++) {
                statement.setString(i, ids.get(i-1));
            }
            ResultSet rs = statement.executeQuery();

            while(rs.next()) {
                itemsList.add(setItem(rs));
            }

        } catch (SQLException ex) {
            LOGGER.error("An SQL Exception occurred." + ex.getMessage());
        }
        return itemsList;
    }
}