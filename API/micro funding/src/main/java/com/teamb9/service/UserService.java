package com.teamb9.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.teamb9.dto.UserDetailsDTO;
import com.teamb9.exception.CustomInternalServerException;
import com.teamb9.exception.CustomNotFoundException;
import com.teamb9.repository.UserRepository;

@Service
public class UserService {

	@Autowired
	UserRepository userRepository;
	
	public List<UserDetailsDTO> getAllUsers(){
		return userRepository.findAll();
	}
	
	public void createUser(UserDetailsDTO userRequestDTO) 
			throws CustomInternalServerException {
		try {
		userRepository.save(userRequestDTO);
		} catch(Exception e) {
			throw new CustomInternalServerException("Something went wrong");
		}
	}
	
	public UserDetailsDTO findUserbyEmail(String email) 
			throws CustomNotFoundException {
		UserDetailsDTO userRequestDTO = userRepository.findByEmail(email);
		if(userRequestDTO != null) {
			return userRequestDTO;
		}
		throw new CustomNotFoundException("User not found");
	}
	
	public void updateUserDetails(String email,String password)
			throws CustomNotFoundException, CustomInternalServerException
	{
		UserDetailsDTO userDetailsDTO = userRepository.findByEmail(email);
		if(userDetailsDTO == null) {
			throw new CustomNotFoundException("User not found");
		}
	    userDetailsDTO.setPassword(password);	  
	    if(userRepository.save(userDetailsDTO) == null) {
	    	throw new CustomInternalServerException("Something went wrong while saving user details");
	    }
	}
}
