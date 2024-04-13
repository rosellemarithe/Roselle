package com.grocery.information.management.appl.facade.grocery.items.impl;

import com.grocery.information.management.appl.facade.grocery.items.ItemsFacade;

public class ItemFacadeImpl implements ItemsFacade {
    private ItemDao itemDao = new ItemDaoImpl();

    @Override
    public List<Item> getAllItems() {
        return itemDao.getAllItems();
    }

    @Override
    public Item getItemById(String id) {
        return itemDao.getItemById(id);
    }

    @Override
    public List<Item> getItemsByIdList(List<String> ids) {
        return itemDao.getItemsByIdList(ids);
    }

}