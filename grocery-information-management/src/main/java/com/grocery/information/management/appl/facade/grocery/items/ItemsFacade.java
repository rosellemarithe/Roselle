package com.grocery.information.management.appl.facade.grocery.items;

public interface ItemsFacade {
    List<Item> getAllItems();

    Item getItemById(String id);

    List<Item> getItemsByIdList(List<String> ids);
}
